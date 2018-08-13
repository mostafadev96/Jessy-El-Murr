@extends('Visitor_pages.master')
@section('custom-style')
    <link href={{ secure_asset("visitor/css/gallery.css") }} rel="stylesheet"/>
@endsection
@section('custom-src')
    <script src=" {{ secure_asset("visitor/js/gallery.js") }}"></script>
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
                            <img class="card-img-top"  src="{{ asset($album->photos[0]->photo) }}" height="235"  alt="Card image cap">
                            <div class="container-fluid show-info" >
                            </div>
                            <div class="container-fluid show-info1" style="overflow: hidden;">
                                <p class="card-title" style="font-size: 1.1rem;font-weight:bold;color: white">{{$album->size}}/1</p>

                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target={{'#album'.$album->id }}><h1 class="card-title" style="font-size: 1.4rem;font-weight: bold;color: white">{{$album->title}}</h1></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div>
        @foreach($albums as $album)
            <div class="modal fade" id={{'album'.$album->id }} tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="box-shadow: 2px 0 37px 12px rgba(74, 98, 220, 0.9);"
                     role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="background: linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 1.7rem;font-weight: 900;color: black;">{{$album->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="card">
                                        <div class="card-body rtl">
                                            <p class="card-text">{{$album->description}}</p>
                                        </div>
                                        <div class="card-footer">
                                            <h4>{{$album->size}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div id="{{'carousel-album'.$album->id }}" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @for($i=0;$i<$album->size;$i++)
                                                @if($i==0)
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src={{$album->photos[$i]->photo }}>
                                                    </div>
                                                @else
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src={{$album->photos[$i]->photo }}>
                                                    </div>
                                                @endif
                                            @endfor
                                        </div>
                                        <a class="carousel-control-prev" href={{'#carousel-album'.$album->id }} role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href={{'#carousel-album'.$album->id }} role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="text-center">
        {{ $albums->links() }}
    </div>
@endsection
