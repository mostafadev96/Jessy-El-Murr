@extends('master')
@section('custom-style')
    <link href={{ asset("css/gallery.css") }} rel="stylesheet"/>
@endsection
@section('custom-src')
    <script src=" {{ asset("js/gallery.js") }}"></script>
@endsection
@section('content')
    <div class="row" style="    background-image: linear-gradient(96deg, rgba(74, 98, 220, 0.99) 7%, rgba(97, 44, 214, 0.99) 100%);
    background-size: 100% 100%;
    position: relative;
    overflow: hidden;">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                @foreach($albums as $album)
                    <div class="col-lg-4" style="margin-bottom: 30px">
                        <div class="card card-overlay" style="background: none;border: none;margin-bottom: 6px">
                            <img class="card-img-top"  src="{{ asset($album->photos[0]->photo) }}"  alt="Card image cap">
                            <div class="container-fluid show-info" >
                            </div>
                            <div class="container-fluid show-info1" >
                                <p class="card-title" style="font-size: 1.1rem;font-weight:bold;color: white">{{$album->size}}/1</p>
                                </a>
                            </div>
                        </div>
                        <a href="#"><h1 class="card-title" style="font-size: 1.4rem;font-weight: bold;color: white">{{$album->title}}</h1></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="text-center">
        {{ $albums->links() }}
    </div>
@endsection
