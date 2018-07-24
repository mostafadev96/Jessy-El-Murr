@extends('master')
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
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-4" style="margin-bottom: 15px">
                        <div class="card"  style="background:white;box-shadow:2px 7px 28px 6px rgba(0, 0, 0, 0.1);">
                            <div style="height: 250px;
                                    border-radius: 100%;
                                    background:no-repeat center;
                                    background-size: cover;
                                    background-image: url('{{asset($testimonial->photo)}}');margin: 40px 55px 10px 55px;"></div>
                            <div class="card-body" style="background:white;text-align: center;overflow: hidden">
                                <h1 style="display: block;font-size: 2.0rem;font-weight: bold;color: black;padding: 0 40px 0 50px;background:linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">{{$testimonial->name}}</h1>
                                <p class="small-black">{{$testimonial->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="text-center">
        {{ $testimonials->links() }}
    </div>
@endsection
