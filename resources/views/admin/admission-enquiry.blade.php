@extends('layout.admin.app')

@push('css')
@endpush
    
@section('content')
  <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Enquiry
                        </div>
                        <h2 class="page-title">
                            Admission Enquiry
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-12">
                        <div class="card card-md">
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11l3 3l8 -8" />
                                <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                            </svg>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <h3 class="h1">Admission Enquiry</h3>
                                        <div class="markdown text-muted">
                                            Manage Admission Enquiry from here.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter text-nowrap datatable">
                                        <thead>
                                            <tr>
                                                <th class="w-1">Sl</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Pincode</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-tbody">
                                            @foreach ($admission_enquiry as $enquiry)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="text-bold-500">{{ $enquiry->name }}</td>
                                                    <td>{{ $enquiry->email }}</td>
                                                    <td>{{ $enquiry->phone }}</td>
                                                    <td>{{ $enquiry->pincode}}</td>
                                                    <td>{{$enquiry->created_at}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    
@endpush