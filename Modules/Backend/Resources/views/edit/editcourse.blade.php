@extends('layouts.app')
@push('styles')
@endpush
@section('content')
<form action="{{route('Course.update', $data->id)}}" method="POST" enctype="multipart/form-data" style="width:85%; margin-left: 35px; ">
    @csrf
    @method('PUT')
    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> Course Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="course_name" value="{{ $data->course_name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Course Details</label>
                        <textarea class="form-control" id="message-text" name="course_details" rows="5" required>{{ $data->course_details}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Course Price</label>
                        <input type="text" class="form-control" id="recipient-name" name="price" value="{{ $data->price}}" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Instructor Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="instructor" value="{{ $data->instructor}}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="customFile">Course Material</label>
                        <input type="file" class="form-control" id="file" name="material[]" multiple value="{{$data->material}}" />
                    </div>
    <button type="cancel" class="btn btn-danger">Cancel</button>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection