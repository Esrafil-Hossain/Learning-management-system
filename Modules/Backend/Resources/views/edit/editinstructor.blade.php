@extends('layouts.app')
@push('styles')
@endpush
@section('content')
<form action="{{route('instructor.update', $data->id)}}" method="POST" enctype="multipart/form-data" style="width:85%; margin-left: 35px; ">
    @csrf
    @method('PUT')
    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> Instructor Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="name" value="{{ $data->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="recipient-name" name="email" value="{{ $data->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Phone Number </label>
                        <input type="phone" class="form-control" id="recipient-name" name="phone" value="{{ $data->phone}}" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="recipient-name" name="password" value="{{$data->password}}" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="avatar" value="{{$data->avatar}}">
                    </div>
                    <button type="cancel" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection