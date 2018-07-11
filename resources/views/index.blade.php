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