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
        body > div:nth-child(3) > div > div.container-fluid > div > div.owl-stage-outer > div > div.owl-item.active > div > img{
            opacity: 1!important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src=" {{ asset("js/owl.carousel.min.js") }}"></script>
    <script src=" {{ asset("js/bootstrap.min.js") }}"></script>
    <title>Document</title>
</head>
<body style="font-family: Lato;font-size: larger">
{{--@include('nav')--}}
@yield('part1')
@yield('part2')
@yield('part3')

{{--@include('footer')--}}

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        stagePadding:332,
        responsive:{
            0:{
                items:1,
                stagePadding:0
            },
            600:{
                items:1,
                stagePadding:0
            },
            1000:{
                items:1
            }
        },
        mouseDrag:false,
        // navText: ["<a role='button' class='prev'><img src='../img/prev.png'/></a>","<a role='button' class='next'><img src='../img/next.png'/></a>"],
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    })
    $(".owl-item.active").find("div").find(".item1").css("position", "absolute");
    $(".owl-item.active").find("div").find(".item1").css("z-index", "1");
    $(".owl-item.active").find("div").find("div").find("img").css("opacity", "1");
    $('.owl-carousel').on('changed.owl.carousel',function(property){
        var current = property.item.index;
        console.log('Image current is ' + current);
    });

</script>

</body>
</html>
