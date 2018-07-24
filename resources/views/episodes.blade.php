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
                @foreach($episodes as $episode)
                    <div class="col-lg-4">
                        <div class="card" style="background: none;border: none">
                            <img class="card-img-top"  src="{{ asset($episode->photo) }}" alt="Card image cap">
                            <div class="card-body" style="padding: 1.25rem 0">
                                <a href="#" data-toggle="modal" data-target={{'#episode'.$episode->id }}><h1 class="card-title" style="font-size: 1.6rem;font-weight: bold;color: white">{{$episode->title}}</h1></a>
                            </div>
                            <div class="container-fluid" style="position: absolute;z-index: 1;left: 39%;top: 22%;">
                                <a href="#" data-toggle="modal" data-target={{'#episode'.$episode->id }}><img src="{{ asset('videoicon.png') }}" alt="Card image cap"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div >
                @foreach($episodes as $episode)
                    <div class="modal fade" id={{'episode'.$episode->id}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="box-shadow: 2px 0 37px 12px rgba(74, 98, 220, 0.9);" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="overflow: hidden;">
                                    <h5 class="modal-title" id="exampleModalLabel" style="background: linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;font-size: 1.7rem;
    font-weight: 900;
    color: black;">{{$episode->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="card">
                                                <div class="card-body rtl" style="overflow: hidden;">
                                                    <p class="card-text">{{$episode->srtdesc}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="card" style="background: none;border: none">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src={{$episode->link}} allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="text-center">
        {{ $episodes->links() }}
    </div>
@endsection
