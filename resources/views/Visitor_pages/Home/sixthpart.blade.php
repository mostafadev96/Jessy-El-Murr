<div class="col-lg-1">
</div>
<div class="col-lg-10" style="position: relative;">
    <h1 class="headline-black">Images gallery</h1>
    <img style="margin-top:8rem;position: absolute;z-index: 1" class="img-fluid"
         src="{{ asset('horizontallineblue.png') }}" alt="...">
    <div class="row" style="margin-top: 16.5rem;position: absolute;z-index: 1;width: 100%">
        <div class="col-sm-4">
            <div class="card card-overlayy1" style="background: none;border: none">
                <img class="card-img-top" src="{{ asset($data->lsidegallery->photos[0]->photo) }}" height="530"  alt="Card image cap">
                <div class="container-fluid show-info">
                </div>
                <div class="container-fluid show-info1" style="overflow: hidden">
                    <p class="card-title"
                       style="font-size: 1.1rem;font-weight:bold;color: white">{{$data->lsidegallery->size}}/1</p>
                    <div style="background-color: rgb(255, 255, 255);
  width: 50px;
  height: 4px;margin-bottom: 6px"></div>
                    {{--in a tag below we will add modal with description and all photos--}}
                    <a href="#" data-toggle="modal" data-target={{'#album'.$data->lsidegallery->id }}><h1 class="card-title" style="font-size: 1.4rem;font-weight: bold;color: white">{{$data->lsidegallery->title}}</h1></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-12">
                    @foreach($data->gallery as $post)
                        <div class="card card-overlayy" style="background: none;border: none;margin-bottom: 30px">
                            <img class="card-img-top" src="{{ asset($post->photos[0]->photo) }}" height="235" alt="Card image cap">
                            <div class="container-fluid show-info">
                            </div>
                            <div class="container-fluid show-info1" style="overflow: hidden">
                                <p class="card-title"
                                   style="font-size: 1.1rem;font-weight:bold;color: white">{{$post->size}}/1</p>
                                <div style="background-color: rgb(255, 255, 255);
  width: 50px;
  height: 4px;margin-bottom: 6px"></div>
                                <a href="#" data-toggle="modal" data-target={{'#album'.$post->id }}><h1 class="card-title"
                                                style="font-size: 1.4rem;font-weight: bold;color: white">{{$post->title}}</h1>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="card card-overlayy2" style="background: none;border: none">
                <img class="card-img-top" src="{{ asset($data->rsidegallery->photos[0]->photo) }}" height="530" alt="Card image cap">
                <div class="container-fluid show-info">
                </div>
                <div class="container-fluid show-info1">
                    <p class="card-title"
                       style="font-size: 1.1rem;font-weight:bold;color: white">{{$data->rsidegallery->size}}/1</p>
                    <div style="background-color: rgb(255, 255, 255);
  width: 50px;
  height: 4px;margin-bottom: 6px"></div>
                    <a href="#" data-toggle="modal" data-target={{'#album'.$data->rsidegallery->id }}><h1 class="card-title"
                                    style="font-size: 1.4rem;font-weight: bold;color: white">{{$data->rsidegallery->title}}</h1>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id={{'album'.$data->lsidegallery->id }} tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="box-shadow: 2px 0px 37px 12px rgba(74, 98, 220, 0.9);"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="background: linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 1.7rem;font-weight: 900;color: black;">{{$data->lsidegallery->title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body rtl">
                                    <p class="card-text">{{$data->lsidegallery->description}}</p>
                                </div>
                                <div class="card-footer">
                                    <h4>{{$data->lsidegallery->size}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div id="{{'carousel-album'.$data->lsidegallery->id }}" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @for($i=0;$i<$data->lsidegallery->size;$i++)
                                        @if($i==0)
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src={{asset($data->lsidegallery->photos[$i]->photo) }}>
                                            </div>
                                        @else
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src={{asset($data->lsidegallery->photos[$i]->photo) }}>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                                <a class="carousel-control-prev" href={{'#carousel-album'.$data->lsidegallery->id }} role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href={{'#carousel-album'.$data->lsidegallery->id }} role="button" data-slide="next">
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
    <div class="modal fade" id={{'album'.$data->rsidegallery->id }} tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="box-shadow: 2px 0px 37px 12px rgba(74, 98, 220, 0.9);"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="background: linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 1.7rem;font-weight: 900;color: black;">{{$data->rsidegallery->title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body rtl">
                                    <p class="card-text">{{$data->rsidegallery->description}}</p>
                                </div>
                                <div class="card-footer">
                                    <h4>{{$data->rsidegallery->size}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div id="{{'carousel-album'.$data->rsidegallery->id }}" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @for($i=0;$i<$data->rsidegallery->size;$i++)
                                        @if($i==0)
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src={{asset($data->rsidegallery->photos[$i]->photo) }}>
                                            </div>
                                        @else
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src={{asset($data->rsidegallery->photos[$i]->photo) }}>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                                <a class="carousel-control-prev" href={{'#carousel-album'.$data->rsidegallery->id }} role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href={{'#carousel-album'.$data->rsidegallery->id }} role="button" data-slide="next">
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
    @foreach($data->gallery as $post)
        <div class="modal fade" id={{'album'.$post->id }} tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="box-shadow: 2px 0px 37px 12px rgba(74, 98, 220, 0.9);"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="background: linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size: 1.7rem;font-weight: 900;color: black;">{{$post->title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-body rtl">
                                        <p class="card-text">{{$post->description}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <h4>{{$post->size}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div id="{{'carousel-album'.$post->id }}" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @for($i=0;$i<$post->size;$i++)
                                            @if($i==0)
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src={{asset($post->photos[$i]->photo) }}>
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src={{asset($post->photos[$i]->photo) }}>
                                                </div>
                                            @endif
                                        @endfor
                                    </div>
                                    <a class="carousel-control-prev" href={{'#carousel-album'.$post->id }} role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href={{'#carousel-album'.$post->id }} role="button" data-slide="next">
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
    <div class="row" style="position: absolute;z-index: 1;bottom: 2%;left: 44%;">
        <div class="col-lg-2">
            <a href="/gallery" class="btn button-background"><p style="font-size: 1rem;font-weight:bold;color: white;">
                    View More</p></a>
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