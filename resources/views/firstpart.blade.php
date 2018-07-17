 <div class="col-lg-1"></div>
 <div class="col-lg-10">
        <img src="{{ asset('JMurrlogo.png') }}" alt="..." style="margin-top: 16px">
     <div class="float-right">
     <a href="#" class="social-icons" style="margin-left: 16px"><i class="fab fa-facebook-square"></i></a>
         <a href="#" class="social-icons" style="margin-left: 16px"><i class="fab fa-twitter"></i></a>
         <a href="#" class="social-icons" style="margin-left: 16px"><i class="fas fa-paper-plane" ></i></a>
         <a href="#" class="social-icons" style="margin-left: 16px"><i class="fas fa-bars" ></i></a>
     </div>
     <div class="row">
            <div style="margin-bottom: 200px" class="col-lg-6">
                <h1 class="headline-white" style="margin-top:12rem;">{{$data->name}}</h1>
                <p class="small-white" style="margin-bottom: 0rem">{{$data->jobTitle}}</p>
                <img style="display: block;
  position: absolute;" class="img-fluid" src="{{ asset('horizontallinewhite.png') }}" alt="..." >
                <p style="font-size: 0.9rem;color: white;margin-bottom: 0rem;margin-top: 1.6rem;max-width: 350px">{{$data->shortBreaf}}</p>
            </div>
         <div class="col-lg-1"></div>
         <div class="col-lg-3" style="max-height:584px;overflow:hidden;">
             <img style="display: block;" class="img-fluid" src="{{ asset('imgs/home/part1/jessy1.png') }}" alt="...">
         </div>
         <div class="col-lg-2"></div>
     </div>
 </div>
 <div class="col-lg-1">
 </div>