<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AdmissionEnquiry;
use Illuminate\Http\Request;

class AdmissionEnquiryController extends Controller
{

     public function index()
    {
        $admission_enquiry = AdmissionEnquiry::all();
        // return $admission_enquiry;
        return view('admin.admission-enquiry',compact('admission_enquiry'));
    }
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'phone'=> 'required|digits:10',
            'email'=> 'required',
            'pincode'=> 'required|digits:6',
        ]);

        $entity = new AdmissionEnquiry();
        $entity->name = $request->name;
        $entity->phone = $request->phone;
        $entity->email = $request->email;
        $entity->pincode = $request->pincode;
        $entity->save();
        flash ('Enquiry has been successfully, we will get back you soon!', 'success');
        return redirect()->back();
    }
}
