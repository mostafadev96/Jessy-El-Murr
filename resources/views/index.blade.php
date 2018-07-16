@extends('master')
@section('home')
        <div class="row" style="background-image: url({{ asset('firstbackground.png') }});background-repeat: no-repeat;
                background-size: 100% 100%;position: relative;
                overflow: hidden;">
            @include('firstpart')
        </div>
        <a class="first-second-btn" href="#"><img src="{{asset('first-secondButton.png')}}"/></a>
        <div class="row">
            @include('secondpart')
        </div>

<div class="row grediant-background">
    @include('thirdpart')
</div>
        <button class="button-background" style="position: absolute;z-index: 4;left: calc(50% - 77px);margin-top: -23px"><p style="font-size: 1rem;font-weight: bold;color: white;">View More</p></button>
<div class="row">
    @include('fourthpart')
</div>

<div class="row grediant-background">
    @include('fifthpart')
</div>
        <button class="button-background" style="position: absolute;z-index: 4;left: calc(50% - 77px);margin-top: -23px"><p style="font-size: 1rem;font-weight: bold;color: white;">View More</p></button>
        <div class="row">
    @include('sixthpart')
</div>
<div class="row grediant-background">
    @include('seventhpart')
</div>

<div class="row">
    @include('eighthpart')
</div>
@endsection