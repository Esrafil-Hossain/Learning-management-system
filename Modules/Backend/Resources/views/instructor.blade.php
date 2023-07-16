@extends('layouts.app')
@push('styles')
@endpush
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <!--begin::Notice-->
        <div class="card card-custom gutter-b">
            <div class="card-header flex-wrap py-5">
                <div class="card-title">
                    <h3 class="card-label"><i class=" text-primary"></i></h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <div class="card-toolbar">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm font-weight-bolder"><i class="fas fa-plus-circle"></i> {{__('Add New')}}</a>
                    </div>
                    <!--end::Button-->
                </div>
            </div>
        </div>
        <!--end::Notice-->
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-body">
                <!--begin: Datatable-->
                <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead class="bg-primary">
                                    <tr>

                                        <th>SL</th>
                                        <th>Instructor Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key=>$instructor)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $instructor->name}}</td>
                                        <td>{{ $instructor->email}}</td>
                                        <td>{{ $instructor->phone}}</td>
                                        <td>
                                            <embed src="{{url('storage/'.$instructor->avatar)}}" width="70" height="70" alt="certificate">                                        
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Select
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="{{route('instructor.delete',$instructor->id)}}">Delete</a>
                                                    <a class="dropdown-item" href="{{route('instructor.edit',$instructor->id)}}">Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
@include('backend::modal.instructormodal')
@endsection