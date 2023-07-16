@extends('website.master');
@section('content');


<!-- Page Content -->
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Checkout</h1>
            </div>
        </div>
    </div>
</div>
<div class="callback-form contact-us">
    <div class="container">
        <h2>Fill up the necessary information to place the order</h2>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <form action="{{route('website.order')}}" id="contact" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="name" style="display: flex;">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}" placeholder="Name:">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="course_id" value="{{$courseId}}" placeholder="Course Name:">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="phone" style="display: flex;">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" placeholder="Email:">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                <label for="address" style="display: flex;">Payment Method</label>
                                    <input type="text" class="form-control" name="payment_method" placeholder="Bkasrh/Nagad/rocket">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="city" style="display: flex;">Account No</label>
                                    <input type="text" class="form-control" name="account_no" placeholder="Account Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="city" style="display: flex;">Transaction ID</label>
                                    <input type="text" class="form-control" name="transaction" placeholder="Account Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="0" name="status" placeholder="status">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" id="form-submit" class="filled-button">Place Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection