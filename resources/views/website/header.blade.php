<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">
        <h2>E-learning<em> System </em></h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item active"> -->
            <a class="nav-link" href="{{route('home')}}">Home
              <!-- <span class="sr-only">(current)</span> -->
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('website.aboutus')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('website.course')}}">Courses</a>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="{{route('website.instructor')}}">Instructor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('website.contactus')}}">Contact Us</a>
          </li>
          @if(auth()->user())
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.profile')}}">Profile</a>
          </li>                    
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.logout')}}">Logout</a>
          </li> 
          @else
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Login</a>
          </li>
           @endif

        </ul>
      </div>
    </div>
  </nav>
</header>


<!--begin::Login Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
      </div>
      <div class="modal-body">
        <form action="{{ url('login') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="recipient-email" class="col-form-label">Email</label>
            <input type="email" class="form-control" id="recipient-email" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
          </div>
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>
            <div class="col">
              <!-- Simple link -->
              <a href="#!">Forgot password?</a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" id="submit" class="btn btn-primary">Login</button>
          </div>
          <div class="text-center">
            <p>Don't have Account? <a href="#" data-toggle="modal" data-target="#exampleModal2">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--end: Modal-->


<!--begin::Registration Modal-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Registration</h5>
      </div>
      <div class="modal-body">
        <form action="{{route('user.signup')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="form-group">
            <label for="recipient-email" class="col-form-label">Email</label>
            <input type="email" class="form-control" id="recipient-email" name="email">
          </div>
          <div class="form-group">
            <label for="recipient-phone" class="col-form-label">Phone Number</label>
            <input type="text" class="form-control" id="recipient-phone" name="phone">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
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