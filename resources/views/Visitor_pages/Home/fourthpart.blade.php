<div class="col-lg-1">
</div>
<div class="col-lg-10" style="position: relative;">
    <h1 class="headline-black">Guests</h1>
    <img style="margin-top:8rem;position: absolute;z-index: 1" class="img-fluid" src="{{ asset('horizontallineblue.png') }}" alt="..." >
    <div class="card-deck" style="margin-top: 16.5rem;margin-left:10px;position: absolute;z-index: 1;width: 92%">
        @foreach($data->guests as $guest)
            <div class="card"  style="background:white;box-shadow:2px 7px 28px 6px rgba(0, 0, 0, 0.1);">
                <div style="height: 250px;
                        border-radius: 100%;
                        background:no-repeat center;
                        background-size: cover;
                        background-image: url('{{asset($guest->photo)}}');margin: 78px 55px 10px 55px;"></div>
                <div class="card-body" style="background:white;text-align: center;overflow: hidden">
                    <h1 style="font-size: 2.3rem;color: black">{{$guest->name}}</h1>
                    <p style="font-size: 1.7rem;color: rgb(108, 18, 211);line-height: 1.2;">{{$guest->job}}</p>
                    <div style="background-color: rgb(107, 21, 211);width: 43px;height: 3px;margin-left: auto;margin-right: auto"></div>
                    <a href={{$guest->facebook}} class="social-icons" style="margin-left: 16px"><i class="fab fa-facebook-square"></i></a>
                    <a href={{$guest->twitter}} class="social-icons" style="margin-left: 24px"><i class="fab fa-twitter"></i></a>
                    <a href={{$guest->plane}} class="social-icons" style="margin-left: 16px"><i class="fas fa-paper-plane" ></i></a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row" style="position: absolute;z-index: 1;bottom: 2%;left: 44%;">
        <div class="col-lg-2">
            <a href="/guests" class="button-background btn"><p style="font-size: 1rem;font-weight: bold;color: white;">View More</p></a>
        </div><!-- /col -->
    </div><!-- /row -->
    <div class="row" style="width: 100%">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-10 fourth-viewmore dotted-background" style="position: relative;z-index: 0;height: 1000px;
    ">
        </div>
        <div class="col-lg-1"></div>
    </div>

</div>
<div class="col-lg-1">
</div>