@extends('Visitor_pages.master')
@section('custom-style')
@endsection
@section('content')
    <div class="row" style="    background-image: linear-gradient(96deg, rgba(74, 98, 220, 0.99) 7%, rgba(97, 44, 214, 0.99) 100%);
    background-size: 100% 100%;
    position: relative;
    overflow: hidden;">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                @foreach ($guests as $guest)
                    <div class="col-lg-4" style="margin-bottom: 15px">
                        <div class="card"  style="background:white;box-shadow:2px 7px 28px 6px rgba(0, 0, 0, 0.1);">
                            <div style="height: 250px;
                                    border-radius: 100%;
                                    background:no-repeat center;
                                    background-size: cover;
                                    background-image: url('{{asset($guest->photo)}}');margin: 40px 55px 10px 55px;"></div>
                            <div class="card-body" style="background:white;text-align: center;overflow: hidden;">
                                <h1 style="font-size: 2.3rem;color: black">{{$guest->name}}</h1>
                                <p style="font-size: 1.7rem;color: rgb(108, 18, 211);line-height: 1.2;">{{$guest->job}}</p>
                                <div style="background-color: rgb(107, 21, 211);width: 43px;height: 3px;margin-left: auto;margin-right: auto"></div>
                                <a href={{$guest->facebook}} class="social-icons" style="margin-left: 16px"><i class="fab fa-facebook-square"></i></a>
                                <a href={{$guest->twitter}} class="social-icons" style="margin-left: 24px"><i class="fab fa-twitter"></i></a>
                                <a href={{$guest->plane}} class="social-icons" style="margin-left: 16px"><i class="fas fa-paper-plane" ></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="text-center">
        {{ $guests->links() }}
    </div>
@endsection
