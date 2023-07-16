@extends('layouts.app')
@push('styles')
@endpush
@section('content')
<form action="{{route('exam.update', $data->id)}}" method="POST" enctype="multipart/form-data" style="width:85%; margin-left: 35px; ">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="recipient-name">Status</label>
        <select name="status" class="form-control" id="recipient-name" required>
            <option>Select status</option>
            <option value="0">Pending</option>
            <option value="1">Pass</option>
            <option value="2">Fail</option>
        </select>
    </div>
    <div class="form-group">
        <label class="form-label" for="customFile">Course Material</label>
        <input type="file" class="form-control" id="file" name="certificate" value="{{$data->certificate}}" />
    </div>
    <button type="cancel" class="btn btn-danger">Cancel</button>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

@endsection