@extends('website.master')
@section('content')



<!-- Page Content -->
<div class="page-heading header-text">

</div>



<div class="callback-form contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('answer.submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name">Exam</label>
                        <select name="exam_id" class="form-control" id="recipient-name" required>
                            <option>Select Exam</option>
                            @foreach($courses as $course)
                            <option value="{{$course->exam_id}}">{{$course->course_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="customFile">Answer</label>
                        <input type="file" class="form-control" id="file" name="answer" required />
                    </div>
                    <div class="footer">
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection