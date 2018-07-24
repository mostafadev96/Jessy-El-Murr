<div class="col-lg-12" style="position: relative;">
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-11">
            <h1 class="headline-white" style="margin-top:4rem;">Videos</h1>
            <img style="display: block;" class="img-fluid" src="{{ asset('horizontallinewhite.png') }}" alt="...">
        </div>
    </div>
    <!--Carousel Wrapper-->
    <div class="row">
        <div class="col-lg-12" style="margin-top: 30px;margin-bottom: 50px">
            <a class="btn prev1"><img src="{{asset('previcon.png')}}"/></a>
            <a class="btn next1"><img src="{{asset('nexticon.png')}}"/></a>
            <div id="owl-carousel1" class="owl-carousel">
                @foreach($data->videos as $item)
                    <div class="item" style=";opacity:0.1;">
                        <div class="item1">
                            <img class="card-img-top"  src="{{ asset($item->photo) }}" alt="Card image cap">
                        </div>
                        <div class="row fixed-bottom"  style="position: absolute;z-index: 1;margin-left: 0px;">
                            <div class="col-sm-5"  style="margin-left: 0px;padding: 24px">
                                <div class="row">
                                    <div class="col-sm-7" style="overflow: hidden">
                                        <h1 class="small-white">{{$item->title}}</h1>
                                        <p style="font-size: 0.7rem;color: white">{{$item->duration}}</p>
                                    </div>
                                    <div class="col-sm-5">
                                        {{--in <a> href={{$item->link}}--}}
                                        <a href="#" data-toggle="modal" data-target={{'#video'.$item->id }}><img class="img-fluid" style="width: auto" src="{{ asset('videoicon.png') }}" alt="Card image cap"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                            </div>
                        </div>
                        <div class="row fixed-bottom"  style="position: absolute;z-index: 1;margin-left: 0px;">
                            <div class="col-sm-5 thirdpartitem">
                                <div class="row">
                                    <div class="col-sm-7" style="overflow: hidden">
                                        <h1 class="small-white">{{$item->title}}</h1>
                                        <p style="font-size: 0.7rem;color: white">{{$item->duration}}</p>
                                    </div>

                                    <div class="col-sm-5">
                                        <a href="#" data-toggle="modal" data-target={{'#video'.$item->id}} ><img class="img-fluid" style="width: auto" src="{{ asset('videoicon.png') }}" alt="Card image cap"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
            <div >
                @foreach($data->videos as $item)
                    <div class="modal fade" id={{'video'.$item->id}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="box-shadow: 2px 0px 37px 12px rgba(74, 98, 220, 0.9);" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="overflow: hidden">
                                    <h5 class="modal-title" id="exampleModalLabel" style="background: linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;font-size: 1.7rem;
    font-weight: 900;
    color: black;">{{$item->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="card">
                                                <div class="card-body rtl" style="overflow: hidden">
                                                    <p class="card-text">{{$item->srtdesc}}</p>
                                                </div>
                                                <div class="card-footer" style="overflow: hidden">
                                                    <h4>{{$item->duration}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="card" style="background: none;border: none">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src={{$item->link}} allowfullscreen></iframe>
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
    </div>

</div>