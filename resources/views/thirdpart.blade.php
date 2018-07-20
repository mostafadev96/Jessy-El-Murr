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
                                        <a href={{$item->link}}><img class="img-fluid" style="width: auto" src="{{ asset('videoicon.png') }}" alt="Card image cap"></a>
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
                                        <a href={{$item->link}}><img class="img-fluid" style="width: auto" src="{{ asset('videoicon.png') }}" alt="Card image cap"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>