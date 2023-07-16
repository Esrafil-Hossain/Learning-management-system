@extends('website.master')
@section('content')
<div class="main-banner header-text" id="top">
  <div class="Modern-Slider">
    <!-- Item -->
    <div class="item item-1">
      <div class="img-fill">
        <div class="text-content">
          <h4>Find out about our <br> latest Courses</h4>
          <a href="{{route('website.course')}}" class="filled-button">Courses</a>
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item item-2">
      <div class="img-fill">
        <div class="text-content">
          <h4>To know more about us</h4>
          <a href="{{route('website.aboutus')}}" class="filled-button">About Us</a>
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item item-3">
      <div class="img-fill">
        <div class="text-content">
          <h4>You can also contact<br>with us through </h4>
          <a href="{{route('website.contactus')}}" class="filled-button">Contact Us</a>
        </div>
      </div>
    </div>
    <!-- // Item -->
  </div>
</div>
<!-- Banner Ends Here -->

<div class="request-form">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h4>Request a call back right now ?</h4>
      </div>
      <div class="col-md-4">
        <a href="{{route('website.contactus')}}" class="border-button">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Featured <em>Courses</em></h2>
          <span>These are Our Latest Courses</span>
        </div>
      </div>
      @foreach($courses as $course)
      <div class="col-md-4">
        <div class="service-item">
          <img style="width: 350px; height: 250px" src="{{url('storage/'.$course->thumnainImage)}}" alt="">
          <div class="down-content">
          <h4> {{ $course->course_name}}</h4>
            <h4> {{ $course->nacourse_nameme}}</h4>
            <div style="margin-bottom:10px;">
              <span>
                <sup>{{ $course->price}} BDT</sup>
              </span>
            </div>
            <p>Details- {{ $course->course_details}} </p>
            <p>Instructor- {{ $course->instructor}} </p>
            <a href="{{route('website.checkout', $course->id)}}" class="filled-button">Order Now</a>
          </div>
        </div>
        <br>
      </div>
      @endforeach
    </div>
  </div>
</div>
<br>


<div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Our <em>Instructor</em></h2>
          <span>These are Our Popular Instructor</span>
        </div>
      </div>
      @foreach($teachers as $teacher)
      <div class="col-md-4">
        <div class="service-item">
          <img style="width: 350px; height: 250px" src="{{url('storage/'.$teacher->avatar)}}" alt="">
          <div class="down-content">
            <h4> {{ $teacher->name}}</h4>
            <div style="margin-bottom:10px;">
              <span>
                <sup>{{ $teacher->email}}</sup>
              </span>
            </div>
            <p>{{ $teacher->phone}} </p>
          </div>
        </div>
        <br>
      </div>
      @endforeach
    </div>
  </div>
</div>

<div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our succesful students</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4> Tasrif Khan</h4>
                  <span>Senior Software Engineer</span>
                  <p>"Great Service very helpful people"</p>
                </div>
                <img src="{{asset('website/images/team_04.jpg')}}" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Golam Rabbani</h4>
                  <span>Market Specialist</span>
                  <p>"I would gladly pay over 6000 Tk for Course. I use This website often."</p>
                </div>
                <img src="{{asset('website/images/team_05.jpg')}}" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Saif Mahmood</h4>
                  <span>Chief Accountant</span>
                  <p>"I'm totally blown away by their service highely recomended."</p>
                </div>
                <img src="{{asset('website/images/team_06.jpg')}}" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
<br>
<div class="fun-facts">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="left-content">
          <h2>Overview Of<em> Our Website</em></h2>
          <p> overview will be inserted here</p>
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <div class="right-content">
          <h2>Get to know about <em> our website</em></h2>
          <a href="#" class="filled-button">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="callback-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Feel free to<em> give us a message</em></h2>
          <span>You can contact us through here</span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="contact-form">
          <form id="contact" action="#" method="get">
            @csrf
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" name="name" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="email" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" name="email" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" name="message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="border-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>
  </div>
</div>
@endsection