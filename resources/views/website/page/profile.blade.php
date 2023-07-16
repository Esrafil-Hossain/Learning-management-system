@extends('website.master')
@section('content')
<br>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/static/core/img/favicon.png" type="image/gif/png" sizes="16x16">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .row a button:hover {
            border: none;
        }
    </style>

</head>

<body>


    <hr>
    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">User Profile</a></li>
                    <li class="active"><a data-toggle="tab" href="#course">Course</a></li>
                    <li class="active"><a data-toggle="tab" href="#status">Exam</a></li>
                    <li class="active"><a data-toggle="tab" href="#answer">Submit Answer</a></li>
                    <li class="active"><a data-toggle="tab" href="#certificate">Certificate</a></li>

                    <li>

                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>

                        <form class="form" action="#" method="post" id="registrationForm">
                            @csrf
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>Name</h4>
                                    </label>
                                    <input value="{{auth()->user()->name}}" type="text" class="form-control" name="name" id="Name" placeholder="Name" title="enter your name if any.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>Email</h4>
                                    </label>
                                    <input value="{{auth()->user()->email}}" type="email" class="form-control" name="email" id="email" placeholder="Email" title="enter your email.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone">
                                        <h4>Phone</h4>
                                    </label>
                                    <input value="{{auth()->user()->phone}}" type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update
                                    </button>

                                </div>
                            </div>
                        </form>

                        <hr>

                    </div>
                    <div class="tab-pane" id="course">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Course Material</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $key=>$order)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $order->course->course_name}}</td>
                                    <td>{{auth()->user()->name}}</td>
                                    <td>{{ $order->email}}</td>
                                    <td> @if($order->status ==1)
                                        <p>Confirm</p>
                                        @else
                                        <p>Pending</p>
                                        @endif
                                    </td>
                                    <td>
                                    @if($order->status ==1)
                                    <a href="{{route('material.download', $order->course->material)}}" class="btn btn-primary">Download</a>
                                    @else
                                        <p>You Can Not Download Now</p>
                                        @endif
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>

                    <div class="tab-pane" id="status">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Download</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($exams as $key=>$exam)

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $exam->order->course->course_name}}</td>
                                    <td>{{auth()->user()->name}}</td>
                                    <td>{{ $exam->duration}}</td>
                                    <td>
                                        <embed src="{{('storage/'.$exam->question)}}" height="70px" width="70px" alt="question">
                                    </td>
                                    <td>
                                        <a href="{{ route('question.download',$exam->question)}}" class="btn btn-primary">Download</a>
                                    </td>
                                    <td> @if($exam->status ==1)
                                        <p>Pass</p>
                                        @elseif($exam->status ==2)
                                        <p>Fail</p>
                                        @else
                                        <p>Pending</p>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                    <div class="tab-pane" id="answer">
                        <form action="{{route('answer.submit')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name">Assignment</label>
                                <select name="exam_id" class="form-control" id="recipient-name" required>
                                    <option>Select course</option>
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

                    <div class="tab-pane" id="certificate">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Certificate</th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($exams as $key=>$exam)

                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td> @if($exam->status ==1)
                                        <p>Pass</p>
                                        @elseif($exam->status ==2)
                                        <p>Fail</p>
                                        @else
                                        <p>Pending</p>
                                        @endif
                                    </td>

                                    <td>
                                        <embed src="{{('storage/'.$exam->certificate)}}" height="70px" width="70px" alt="certificate">
                                    </td>
                                    <td>
                                    @if($exam->status ==1)
                                    <a href="{{ route('certificate.download',$exam->certificate) }}" class="btn btn-primary">Download</a>
                                    @else
                                        <p>You Can Download Certificate After Passing The Exam</p>
                                        @endif
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>

                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
    <!--/row-->

</body>

</html>
<br>
<br>






@endsection