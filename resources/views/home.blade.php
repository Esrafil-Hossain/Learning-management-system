@extends('layouts.app')

@section('title','Dashboard')

@push('styles')
<link rel="stylesheet" href="css/chart.min.css">
<style>
    .today-btn{
        border-radius: 5px 0 0 5px !important;
    }
    .week-btn,.month-btn{
        border-radius: 0 !important;
    }
    .year-btn{
        border-radius: 0 5px 5px 0 !important;
    }
    .icon{
        width: 40px;
        height: 40px;
    }
</style>
@endpush

@section('content')
<div class="row">
            <div class="col-md-3">
                <div class="bg-white text-center py-3  rounded-xl">
                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-3">
                        <img src="images/product.svg" alt="purchase" class="icon">
                    </span>
                    <h6 id="purchase" class="m-0">15</h6>
                    <a href="#" class="font-weight-bold font-size-h7 mt-2">Course</a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="bg-white text-center py-3  rounded-xl">
                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-3">
                        <img src="images/earning.svg" alt="sale" class="icon">
                    </span>
                    <h6 id="sale" class="m-0">2000 TK</h6>
                    <a href="#" class="font-weight-bold font-size-h7 mt-2">Earning</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="bg-white text-center py-3  rounded-xl">
                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-3">
                        <img src="images/customer.png" alt="customer" class="icon">
                    </span>
                    <h6 id="customer" class="m-0">10</h6>
                    <a href="#" class="font-weight-bold font-size-h7 mt-2">Student</a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="bg-white text-center py-3  rounded-xl">
                    <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-3">
                        <img src="images/customer.png" alt="expense" class="icon">
                    </span>
                    <h6 id="expense" class="m-0">10</h6>
                    <a href="#" class="font-weight-bold font-size-h7 mt-2">Instructor</a>
                </div>
            </div>
        </div>
@endsection

