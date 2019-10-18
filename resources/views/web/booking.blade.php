@extends('web.layout')
@section('title', 'Booking')
@section('body-class', 'booking')
@section('content')
<!-- start banner Area -->
<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Booking
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span>
                    <a href="hotels.html"> Booking</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Form section -->
{{-- <section class="form-section">
    <div class="keel-container form-container s-t-bp">
        <div id="wPO1"
            class="Base-search-SearhFormFlights-Search-FlightSearchFormDeprecated size-xs size-s size-m size-l Flight-Search-FlightSearchForm fd dealsabove">
            <div class="keel-grid keel-form formHeader">
                <div class="col col-1-m gridCellDisplayCat">
                    <div class="displayCatBloc">
                        <div class="row  my-5 justify-content-center">
                            <span class="booking-span">Booking</span>

                            <div class="bg-search">
                                <div class="form-group mx-2">
                                    <select class="form-control search-input" id="exampleFormControlSelect1">
                                        <option>To Where</option>
                                        @foreach ($stations as $item)
                                        <option value="{{$item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mx-2">
                                    <select class="form-control search-input" id="exampleFormControlSelect1">
                                        <option>From Where</option>
                                        @foreach ($stations as $item)
                                        <option value="{{$item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="datetime-local" class="form-control search-input"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="To Where">
                                </div>
                                <div class="form-group mx-2">
                                    <input type="datetime-local" class="form-control search-input"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="To Where">
                                </div>
                                <div class="form-group mx-2">
                                    <select class="form-control search-input" id="exampleFormControlSelect1">
                                        <option value="">Traveler Class</option>
                                        @foreach ($traveler_class as $item)
                                        <option value="{{$item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="destinations-area">

        <div class="container">
                <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-40 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10 mt-5">Booking planets</h1>
                            </div>
                        </div>
                    </div>
            <div class="row">
                @foreach ($flights as $item)
                <div class="col-lg-6 mb-4">
                        <form action="{{ route('booking.store') }}" method="POST">
                            {{ csrf_field() }}
                        <?php 
                            $from = Carbon\Carbon::parse($item->start_date);
                            $to = Carbon\Carbon::parse($item->end_date);  
                            $diff = $from->diffInYears($to);
                        ?>
                        <div class="single-destinations">
                            <div class="details">
                                <h4 class="d-flex justify-content-between">
                                    <span>{{ $item->name }}</span>
                                    <h6 class="mb-2">From: {{ $item->fromStation->name }}</h6>
                                    <h6 class="mb-2">To: {{ $item->toStation->name }}</h6>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </h4>
                                <span>
                                    From: {{ $item->start_date }}
                                </span>
                                <span class="pull-right">
                                        To: {{ $item->end_date }}
                                    </span>
                                    <p>Years to arrive: {{$diff}}</p>
                                <ul class="package-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <button type="submit" class="btn btn-primary">Booking</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
