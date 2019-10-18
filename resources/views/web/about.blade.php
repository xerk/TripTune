@extends('web.layout')
@section('title', 'About')
@section('body-class', 'about')
@section('content')
<!-- start banner Area -->
<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    About Us
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span>
                    <a href="about.html"> About Us</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start about-info Area -->
<section class="about-info-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 info-left">
                <img class="img-fluid" src="img/about/milky-way-starry-sky-night-sky-star-956981.jpeg" alt="">
            </div>
            <div class="col-lg-6 info-right">
                <h6>About Us</h6>
                <h1>Mission and Vision</h1>
                <p>
                        We believe we can help inspire generations and make it possible to deliver spaceships from earth that will explore the edge of our solar system and the world beyond Neptune.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End about-info Area -->

<!-- Start price Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">What will our product be?</h1>
                    <p>Our company develop technologies to enable human beings to travel and explore space at a dramatically lower cost and increased reliability.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Cheap Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Venus</span>
                            <a href="#" class="price-btn">$1400</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Apollo</span>
                            <a href="#" class="price-btn">$2500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Mars</span>
                            <a href="#" class="price-btn">$2000</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Jupiter</span>
                            <a href="#" class="price-btn">$6000</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Saturn</span>
                            <a href="#" class="price-btn">$3000</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Uranus</span>
                            <a href="#" class="price-btn">$7000</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Luxury Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Pluto</span>
                            <a href="#" class="price-btn">$10000</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Neptune</span>
                            <a href="#" class="price-btn">$15000</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Kepler</span>
                            <a href="#" class="price-btn">$20000</a>
                        </li>



                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End price Area -->


<!-- Start other-issue Area -->
<section class="other-issue-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Other issues we can help you with</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/backpack-business-co-working-2566581.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Education</h4>
                    </a>
                    <p>
                        We provide educational courses for our space lovers!
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/astronomy-dark-design-924824.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Easy Booking</h4>
                    </a>
                    <p>
                        You can book for your trips, anywhere, anytime, just with a our website
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/624.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Awesome programs</h4>
                    </a>
                    <p>
                        We have professional plan makers who car about your
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/331.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Food Features</h4>
                    </a>
                    <p>
                        There are many kinds of narratives and organizing principles. Science is driven by
                        evidence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End other-issue Area -->
@stop
