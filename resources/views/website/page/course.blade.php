@extends('website.master');
@section('content');


<!-- Page Content -->
<div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Courses</h1>
            <span>Here are the list of our latest courses</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
  <div class="container">
    <div class="row">
      @foreach($courses as $course)
      <div class="col-md-4">
        <div class="service-item">
          <img style="width: 350px; height: 250px" src="{{url('storage/'.$course->thumnainImage)}}" alt="">
          <div class="down-content">
            <h4> {{ $course->course_name}}</h4>
            <div style="margin-bottom:10px;">
              <span>
                <sup>BDT- {{ $course->price}}</sup>
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


@endsection