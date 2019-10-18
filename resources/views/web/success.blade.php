@extends('web.layout')
@section('title', 'Booking Success')
@section('body-class', 'success')
@section('content')
<!-- start banner Area -->
<section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Congratulations
                    </h1>
                    <h4 class="text-success mt-2">Successfully booked</h4>
                    <p class="text-white link-nav"><a href="{{ route('landing-page') }}">Home </a> <span class="lnr lnr-arrow-right"></span>
                        <a href="{{ route('booking') }}"> Booking</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@stop
