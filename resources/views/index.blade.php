@extends('master')
@php($data = json_decode($data))
@section('content')
    <div>
        <div class="row" style="background-image: url({{ asset('firstbackground.png') }});background-repeat: no-repeat;
                background-size: 100% 100%;position: relative;
                overflow: hidden;">
            @include('Home.firstpart')
        </div>
        <a class="first-second-btn" href="#biography"><img src="{{asset('first-secondButton.png')}}"/></a>
        <div id="biography" class="row">
            @include('Home.secondpart')
        </div>
    </div>
    <div id="videos" class="row grediant-background">
        @include('Home.thirdpart')
    </div>
    <a href="/videos" class="button-background"
       style="position: absolute;z-index: 4;left: calc(50% - 77px);margin-top: -23px"><p
                style="font-size: 1rem;font-weight: bold;color: white;">View More</p></a>
    <div id="guests" class="row">
        @include('Home.fourthpart')
    </div>
    <div id="tweets" class="row grediant-background">
        @include('Home.fifthpart')
    </div>
    <a href="/episodes" class="button-background"
       style="position: absolute;z-index: 4;left: calc(50% - 77px);margin-top: -23px"><p
                style="font-size: 1rem;font-weight: bold;color: white;">View More</p></a>
    <div id="gallery" class="row">
        @include('Home.sixthpart')
    </div>
    <div id="testimonials" class="row grediant-background">
        @include('Home.seventhpart')
    </div>
@endsection