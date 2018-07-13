@extends('master')

@section('part1')
    <div class="row" style="background-image: url({{ asset('firstbackground.png') }});background-repeat: no-repeat;
            background-size: 100% 100%;position: relative;
            overflow: hidden;">
        @include('firstpart')

    </div>
@endsection
@section('part2')

    <div class="row" >
        @include('secondpart')
    </div>
@endsection
@section('part3')
    <div class="row" style="
  background-image: linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);
  background-size: 100% 100%;position: relative;
  overflow: hidden;">
        @include('thirdpart')
    </div>

@endsection
@section('part4')
    <div class="row">
        @include('fourthpart')
    </div>

@endsection