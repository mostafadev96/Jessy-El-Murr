<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href = {{ asset("css/owl.carousel.min.css") }} rel="stylesheet" />
    <link href = {{ asset("css/owl.theme.default.min.css") }} rel="stylesheet" />
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
    <link href = {{ asset("css/style.min.css") }} rel="stylesheet" />
    <style>


    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src=" {{ asset("js/owl.carousel.min.js") }}"></script>
    <script src=" {{ asset("js/bootstrap.min.js") }}"></script>
    <title>Document</title>
</head>
<body style="font-family: Lato;font-size: larger;">
{{--@include('nav')--}}
@yield('part1')
@yield('part2')
@yield('part3')
@yield('part4')


{{--@include('footer')--}}

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        stagePadding:332,
        responsive:{
            0:{
                items:1,
                stagePadding:0
            },
            200:{
                items:1,
                stagePadding:20
            },
            400:{
                items:1,
                stagePadding:50
            },
            600:{
                items:1,
                stagePadding:60
            },
            1000:{
                items:1
            }
        },
        mouseDrag:false,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    })

    $(".owl-item.active >div").css("opacity", "1");

    var owl = $('.owl-carousel');
    owl.owlCarousel();
    // Go to the next item
    $('.next').click(function() {
        console.log('Image current is ' + "bs");

        owl.trigger('next.owl.carousel', [400]);
    })
    // Go to the previous item
    $('.prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        console.log('Image current is ' + "bs");

        owl.trigger('prev.owl.carousel', [400]);
    })

    $('.owl-carousel').on('changed.owl.carousel',function(property){
        var current = property.item.index;

        $(".owl-item>div").eq(current).css("opacity", "1");
        $(".owl-item>div").eq(current-1).css("opacity", "0.1");
        $(".owl-item>div").eq(current+1).css("opacity", "0.1");
    });

</script>

</body>
</html>
