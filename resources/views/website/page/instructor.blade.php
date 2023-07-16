@extends('website.master');
@section('content');


<!-- Page Content -->
<div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Instructors</h1>
            <span>Here are the list of our helpful instructors</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
  <div class="container">
    <div class="row">
      @foreach($teachers as $teacher)
      <div class="col-md-4">
        <div class="service-item">
          <img style="width: 350px; height: 250px" src="{{url('storage/'.$teacher->avatar)}}" alt="">
          <div class="down-content">
            <h4> {{ $teacher->name}}</h4>
            <div style="margin-bottom:10px;">
              <span>
                <sup> {{ $teacher->email}}</sup>
              </span>
            </div>
            <p>{{ $teacher->phone}} </p>
          </div>
        </div>
        <br>
      </div>
      @endforeach
    </div>


@endsection