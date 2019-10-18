@extends('web.layout')
@section('title', 'Home')
@section('body-class', 'home')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">
                <h6 class="text-white">Get an extraordinary trip</h6>
                <h1 class="text-white">TripTune</h1>

                <a href="{{ route('booking') }}" class="primary-btn text-uppercase">Get Started</a>
            </div>

        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start popular-destination Area -->
<section class="popular-destination-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Destinations</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/download.jpg" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$150</a>
                        <h4>Neptune</h4>
                        <p>Milky way</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/photos/032619_lg_kuiper_feat.jpg"> alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$250</a>
                        <h4>Kuiper Belt</h4>
                        <p>Milky way</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/photos/download.jpg" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$350</a>
                        <h4>Pluto</h4>
                        <p>Milky way</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End popular-destination Area -->





<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 col-md-12 home-about-left">
                <h1>
                    Still have questions? <br>
                    Feel free to ask us. <br>
                    We‘ll make it for you
                </h1>
                <p>

                </p>
                <a href="#" class="primary-btn text-uppercase">Contact</a>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="img/72852393_2515803875368725_5812301403984494592_n.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->


<!-- Start blog Area -->
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Previous Trips</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-recent-blog-carusel">
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/photos/72101824_722797684902301_6885605115550498816_n.jpg"
                            alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>

                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">1st trip</h4>
                        </a>

                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" width="360px" height="260px"
                            src="img/photos/71966714_890950774635550_1954040399752331264_n.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>

                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">2nd trip</h4>
                        </a>
                        <h6 class="date">31st January,2018</h6>

                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/photos/73008287_1293485180833904_7013320447747948544_n.jpg"
                            alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>

                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">3rd trip</h4>
                        </a>
                        <h6 class="date">31st January,2018</h6>

                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/photos/72069197_770027203454620_8945293047835394048_n.jpg"
                            alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">4th Trip</h4>
                        </a>
                        <h6 class="date">31st January,2018</h6>

                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/photos/72559670_885707765133699_7402110495223709696_n.jpg"
                            alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>

                            </ul>
                        </div>
                        <a href="#">
                            <h4 class="title">5th Trip</h4>
                        </a>

                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/photos/72852393_2515803875368725_5812301403984494592_n.jpg"
                            alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <a href="#">
                                    <h4 class="title">6th Trip</h4>
                                </a>
                            </ul>
                        </div>


                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End recent-blog Area -->
@stop