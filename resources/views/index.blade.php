@extends('master')
@section('home')
<div class="row" style="background-image: url({{ asset('firstbackground.png') }});background-repeat: no-repeat;
        background-size: 100% 100%;position: relative;
        overflow: hidden;">
    @include('firstpart')
</div>
<div class="row">
    @include('secondpart')
</div>
<div class="row grediant-background">
    @include('thirdpart')
</div>

<div class="row">
    @include('fourthpart')
</div>

<div class="row grediant-background">
    @include('fifthpart')
</div>
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