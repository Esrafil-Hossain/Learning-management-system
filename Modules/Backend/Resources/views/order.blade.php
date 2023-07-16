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
                        <!-- <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm font-weight-bolder"><i class="fas fa-plus-circle"></i> {{__('Add New')}}</a> -->
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
                                        <th>Name</th>
                                        <th>Course Name</th>
                                        <th>Email</th>
                                        <th>Payment Method</th>
                                        <th>Account No</th>
                                        <th>Transaction ID</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key=>$order)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $order->name}}</td>
                                        <td>{{ $order->course->course_name}}</td>
                                        <td>{{ $order->email}}</td>
                                        <td>{{ $order->payment_method}}</td>
                                        <td>{{ $order->account_no}}</td>
                                        <td>{{ $order->transaction}}</td>
                                        <td>
                                            @if($order->status ==0)
                                                <a href="{{route('order.status', $order->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger"> Pending</a>
                                                @else
                                                <a href="{{route('order.status', $order->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-success">Confirm</a>
                                            @endif
                                        <td>
                                        <a href="{{route('order.delete', $order->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>


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
@endsection