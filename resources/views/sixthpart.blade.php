<div class="col-lg-1">
</div>
<div class="col-lg-10" style="position: relative;">
    <h1 class="headline-black">Images gallery</h1>
    <img style="margin-top:8rem;position: absolute;z-index: 1" class="img-fluid" src="{{ asset('horizontallineblue.png') }}" alt="..." >
    <div class="row" style="margin-top: 16.5rem;position: absolute;z-index: 1;width: 100%">
        <div class="col-sm-4">
            <div class="card card-overlayy1" style="background: none;border: none">
                <img class="card-img-top"  src="{{ asset($data->lsidegallery->photos[0]->photo) }}" alt="Card image cap">
                <div class="container-fluid show-info">
                </div>
                <div class="container-fluid show-info1">
                    <p class="card-title" style="font-size: 1.1rem;font-weight:bold;color: white">{{$data->lsidegallery->size}}/1</p>
                    <div style="background-color: rgb(255, 255, 255);
  width: 50px;
  height: 4px;margin-bottom: 6px"></div>
                    {{--in a tag below we will add modal with description and all photos--}}
                    <a href="#"><h1 class="card-title" style="font-size: 1.4rem;font-weight: bold;color: white">{{$data->lsidegallery->title}}</h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-12">
                    @foreach($data->gallery as $post)
                        <div class="card card-overlayy" style="background: none;border: none;margin-bottom: 30px">
                            <img class="card-img-top"  src="{{ asset($post->photos[0]->photo) }}" alt="Card image cap">
                            <div class="container-fluid show-info">
                            </div>
                            <div class="container-fluid show-info1">
                                <p class="card-title" style="font-size: 1.1rem;font-weight:bold;color: white">{{$post->size}}/1</p>
                                <div style="background-color: rgb(255, 255, 255);
  width: 50px;
  height: 4px;margin-bottom: 6px"></div>
                                <a href="#"><h1 class="card-title" style="font-size: 1.4rem;font-weight: bold;color: white">{{$post->title}}</h1>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="card card-overlayy2" style="background: none;border: none">
                <img class="card-img-top"  src="{{ asset($data->rsidegallery->photos[0]->photo) }}" alt="Card image cap">
                <div class="container-fluid show-info">
                </div>
                <div class="container-fluid show-info1">
                    <p class="card-title" style="font-size: 1.1rem;font-weight:bold;color: white">{{$data->rsidegallery->size}}/1</p>
                    <div style="background-color: rgb(255, 255, 255);
  width: 50px;
  height: 4px;margin-bottom: 6px"></div>
                    <a href="#"><h1 class="card-title" style="font-size: 1.4rem;font-weight: bold;color: white">{{$data->rsidegallery->title}}</h1>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="row" style="position: absolute;z-index: 1;bottom: 2%;left: 44%;">
        <div class="col-lg-2">
            <button class="btn button-background"><p style="font-size: 1rem;font-weight:bold;color: white;">View More</p></button>
        </div><!-- /col -->
    </div><!-- /row -->
    <div class="row" style="width: 100%">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10 fourth-viewmore1 dotted-background" style="position: relative;z-index: 0;height: 1000px;
    ">
        </div>
        <div class="col-lg-1"></div>
    </div>

</div>
<div class="col-lg-1">
</div>