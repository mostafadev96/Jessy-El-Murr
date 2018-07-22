<div class="col-lg-1"></div>
<div class="col-lg-10" style="position: relative;">
    <h1 class="headline-black">Biography</h1>
    <img style="margin-top:8rem;position: absolute;z-index: 1" class="img-fluid" src="{{ asset('horizontallineblue.png') }}" alt="..." >
    <div class="row">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-10 fourth-viewmore4 dotted-background" style="position: relative;z-index: 0;height: 1000px;
    ">
            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-10" style="position: relative;">
                    <div class="container">
                        <div style="position: absolute;z-index: 2;margin-top: 30%">
                            <img style="max-width: 50%" src="{{ asset('imgs/home/part2/secondjessyphoto.png') }}" alt="..." >
                        </div>
                        <div class="card pull-below" style="max-width:65%;margin-top: 45%;margin-left: 18%;background:white;box-shadow:2px 7px 28px 6px rgba(0, 0, 0, 0.1);position: absolute;z-index: 1">
                            <div class="card-body" style="background:white;">
                                <p style="display: block;font-size: 1.7rem;font-weight: bolder;color: black;padding:30px 40px 0 50px;background:linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Jessy El Murr</p>
                                @foreach($data->phrases as $phrase)
                                    <p class="phrases-secondpart">{{$phrase}}</p>
                                @endforeach
                                <a href="/biography" class="button-background" style="position:  absolute;left:30%"><p style="font-size: 1rem;font-weight: bold;color: white;">View More</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">
                </div>
            </div>


        </div>
        <div class="col-lg-1"></div>
    </div>




</div>
<div class="col-lg-1">
</div>