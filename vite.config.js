import { execSync } from "node:child_process";

import * as glob from "glob";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";
import banner from "vite-plugin-banner";

const gitInfo = getGitInfo() || {
    repoUrl: "N/A",
    commitHash: "N/A",
    environment: "N/A",
    commitMessage: "N/A",
    contributors: "N/A",
};
const contributors = getAllContributors();
const environment = process.env.NODE_ENV || "development";
const developerInfo = `
**************************************************
*               Project Information              *
**************************************************

Repository:     ${gitInfo.repoUrl}
Commit Hash:    ${gitInfo.commitHash}
Environment:    ${environment}
Compiled at:    ${new Date().toLocaleString()}
Contributors:   ${contributors.join(", ")}

**************************************************
`;
const resources = [
    ...glob.sync("resources/js/**/*.{js,vue}"),
    ...glob.sync("resources/css/**/*.{css,scss}"),
    ...glob.sync("resources/fonts/**/*.{ttf,woff,woff2,eot}"),
    ...glob.sync("resources/images/**/*.{svg,png,jpg,gif}"),
];
export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/frontend.css",
                "resources/js/frontend.js",
                "resources/css/backend.css",
                "resources/js/backend.js",
            ],
            refresh: true,
        }),
        banner(developerInfo),
    ],
    build: {
        minify: "esbuild",
        chunkSizeWarningLimit: 500,
        sourcemap: environment === "development",
    },
    resolve: { alias: { "@": "/resources/" } },
    define: { "process.env.NODE_ENV": JSON.stringify(process.env.NODE_ENV) },
});

function maskEmail(email) {
    const [user, domain] = email.split("@");
    if (!user || !domain) return "<hidden>";

    if (user.length >= 4) {
        const first2 = user.slice(0, 2);
        const last2 = user.slice(-2);
        const maskedPart = "*".repeat(6); // fixed-length mask
        return `<${first2}${maskedPart}${last2}@${domain}>`;
    } else {
        // If user part is too short, mask it entirely for safety
        return `<********@${domain}>`;
    }
}

function getAllContributors() {
    try {
        const contributors = execSync("git log --format='%aN <%aE>'")
            .toString()
            .trim()
            .split("\n")
            .map((line) => {
                const match = line.match(/^(.+?) <(.+?)>$/);
                if (!match) return null;
                const name = match[1];
                const email = match[2];
                return `${name} ${maskEmail(email)}`;
            })
            .filter(Boolean)
            .filter((value, index, self) => self.indexOf(value) === index);

        return contributors;
    } catch (error) {
        console.error("Error fetching local contributors:", error);
        return [];
    }
}
function getGitInfo() {
    try {
        const gitStatus = execSync("git status --porcelain -b")
            .toString()
            .trim()
            .split("\n");
        const branchName = gitStatus
            .find((line) => line.startsWith("##"))
            .replace("##", "")
            .trim();
        const commitHash = execSync("git rev-parse --short HEAD")
            .toString()
            .trim();
        const repoUrl = execSync("git config --get remote.origin.url")
            .toString()
            .trim();
        return { commitHash, branchName, repoUrl };
    } catch (error) {
        console.error("Error fetching Git information:", error);
        return {};
    }
}
