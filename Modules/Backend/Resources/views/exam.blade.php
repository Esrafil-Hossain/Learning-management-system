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
                                        <th>Orderd Course</th>
                                        <th>Student Name</th>
                                        <th>Time</th>
                                        <th>Answer</th>
                                        <th>Status</th>
                                        <th>Certificate</th>
                                        <th>Question</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $key=>$exam)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $exam->order->course->course_name}}</td>
                                        <td>{{ $exam->order->user->name}}</td>
                                        <td>{{ $exam->duration}}</td>
                                        <td>
                                            @if(!is_null($exam->answer))
                                            <a type="button" href="{{route('answer.download', $exam->answer)}}" class="btn btn-success">Download Answer</a>
                                            @else
                                            <p>Script is not available</p>
                                            @endif
                                        </td>

                                        <td>
                                            @if($exam->status ==1)
                                            <p>Pass</p>
                                            @elseif($exam->status ==2)
                                            <p>Fail</p>
                                            @else
                                            <p>Pending</p>
                                            @endif
                                        </td>
                                        <td>
                                            <embed src="{{url('storage/'.$exam->certificate)}}" width="70" height="70" alt="certificate">
                                        </td>

                                        <td>
                                            <embed src="{{url('storage/'.$exam->question)}}" width="70" height="70" alt="certificate">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Select
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" onclick="return confirm('Are you sure?')" href="{{route('exam.delete',$exam->id)}}">Delete</a>
                                                    <a class="dropdown-item" href="{{route('exam.edit', $exam->id)}}">Upload Certificate</a>
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
@include('backend::modal.exammodal')
@endsection