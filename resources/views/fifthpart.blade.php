<div class="col-lg-12" style="position: relative;">
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <h1 class="headline-white" style="margin-top:4rem;">Daily Tweets Episodes</h1>
            <img style="display: block;" src="{{ asset('horizontallinewhite.png') }}" alt="...">
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row" style="margin-top: 40px;margin-bottom: 50px">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <div class="row">
                @foreach($data->episodes as $episode)
                    <div class="col-lg-4">
                        <div class="card" style="background: none;border: none">
                            <img class="card-img-top"  src="{{ asset($episode->photo) }}" alt="Card image cap">
                            <div class="card-body" style="padding: 1.25rem 0rem">
                                <h1 class="card-title" style="font-size: 1.6rem;font-weight: bold;color: white">{{$episode->title}}</h1>
                            </div>
                            <div class="container-fluid" style="position: absolute;z-index: 1;left: 39%;top: 22%;">
                                <a href={{$episode->link}}><img src="{{ asset('videoicon.png') }}" alt="Card image cap"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>


</div>