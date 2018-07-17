<div class="col-lg-12" style="position: relative;">
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-11">
            <h1 class="headline-white" style="margin-top:4rem;">Testimonials</h1>
            <img style="display: block;" class="img-fluid" src="{{ asset('horizontallinewhite.png') }}" alt="...">
        </div>
    </div>
    <!--Carousel Wrapper-->
    <div class="container-fluid" style="margin-top: 30px">
        <div id="owl-carousel2" class="owl-carousel">
            @foreach($data->testimonials as $testimonial)
                <div class="item" style="opacity: 0.1; position: relative;">
                    <div style="
                            height: 63%;
                            width: 24%;
                            border-radius: 100%;
                            background:no-repeat center;
                            background-size: cover;
                            background-image: url({{asset($testimonial->photo)}});
                            top: -44%;
                            left: 40%;
                            position:  absolute;
                            z-index:  1;
                            ">
                    </div>
                    <div style="
                            height: 56%;
                            width: 16%;
                            border-radius: 100%;
                            background:no-repeat center;
                            background-size: cover;
                            background-image: url({{asset("qoutes.png")}});
                            margin-left: auto;
                            margin-right: auto;
                            position:  absolute;
                            z-index: 1;
                            top: -10%;
                            left: 44%;
                            ">
                    </div>
                    <div class="card" style="background:white;box-shadow:2px 7px 28px 6px rgba(0, 0, 0, 0.1);margin-top: 143px;margin-bottom:  40px;">
                        <div class="card-body" style="background:white;text-align: center;/* width: 616px; */overflow: hidden;margin-left: auto;margin-right: auto;/* padding-top: 119px; */">
                            <h1 style="display: block;font-size: 2.0rem;font-weight: bold;color: black;padding: 54px 40px 0px 50px;background:linear-gradient( 132deg, rgb(108,18,211) 0%, rgb(74,98,220) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">{{$testimonial->name}}</h1>
                            <p class="small-black">{{$testimonial->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="btn prev2" style="position: relative;
    margin-left: 45%;margin-bottom: 10%"><img src="{{asset('previcon.png')}}"/></a>
        <a style="margin-bottom: 10%" class="btn next2" ><img src="{{asset('nexticon.png')}}"/></a>
    </div>

</div>