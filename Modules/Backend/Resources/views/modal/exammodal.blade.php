<!--begin::Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Exam</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('exam.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name">Ordered Course</label>
                        <select name="order_id" class="form-control" id="recipient-name" required>
                        <option>Select Course</option>
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->course_name}} - {{$course->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Time</label>
                        <input type="datetime-local" class="form-control" id="recipient-name" name="duration" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Question</label>
                        <input type="file" class="form-control-file" id="image" name="question" required>
                    </div>
                    <div class="modal-footer">
                        <button type="close" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end: Modal-->