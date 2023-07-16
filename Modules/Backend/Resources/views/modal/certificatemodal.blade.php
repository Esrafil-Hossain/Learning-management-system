<!--begin::Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Certificate</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('certificate.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> Course Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="course_name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name">Student Name</label>
                        <select name="user_id" class="form-control" id="recipient-name" required>
                        <option>Select Student</option>
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Passing Date</label>
                        <input type="date" class="form-control" id="recipient-name" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Certificate</label>
                        <input type="file" class="form-control-file" id="image" name="certificate" required>
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