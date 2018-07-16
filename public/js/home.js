$('#owl-carousel1').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    stagePadding: 332,
    responsive: {
        0: {
            items: 1,
            stagePadding: 0
        },
        200: {
            items: 1,
            stagePadding: 20
        },
        400: {
            items: 1,
            stagePadding: 50
        },
        600: {
            items: 1,
            stagePadding: 60
        },
        1000: {
            items: 1
        }
    },
    mouseDrag: false,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true
});
$('#owl-carousel2').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    stagePadding: 320,
    responsive: {
        0: {
            items: 1,
            stagePadding: 0
        },
        200: {
            items: 1,
            stagePadding: 20
        },
        400: {
            items: 1,
            stagePadding: 50
        },
        600: {
            items: 1,
            stagePadding: 60
        },
        1000: {
            items: 1
        }
    },
    mouseDrag: false,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true
});

$(".owl-item.active >div").css("opacity", "1");

var owl = $('#owl-carousel1');
owl.owlCarousel();
// Go to the next item
$('.next1').click(function () {
    console.log('Image current is ' + "bs");

    owl.trigger('next.owl.carousel', [400]);
})
// Go to the previous item
$('.prev1').click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    console.log('Image current is ' + "bs");

    owl.trigger('prev.owl.carousel', [400]);
})
var owl2 = $('#owl-carousel2');
owl2.owlCarousel();
// Go to the next item
$('.next2').click(function () {
    console.log('Image current is ' + "bs");

    owl2.trigger('next.owl.carousel', [400]);
})
// Go to the previous item
$('.prev2').click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    console.log('Image current is ' + "bs");

    owl2.trigger('prev.owl.carousel', [400]);
})

$('#owl-carousel1').on('changed.owl.carousel', function (property) {
    var current = property.item.index;

    $('#owl-carousel1').find(".owl-item>div").eq(current).css("opacity", "1");
    $('#owl-carousel1').find(".owl-item>div").eq(current - 1).css("opacity", "0.1");
    $('#owl-carousel1').find(".owl-item>div").eq(current + 1).css("opacity", "0.1");
});
$('#owl-carousel2').on('changed.owl.carousel', function (property) {
    var current = property.item.index;

    $('#owl-carousel2').find(".owl-item>div").eq(current).css("opacity", "1");
    $('#owl-carousel2').find(".owl-item>div").eq(current - 1).css("opacity", "0.1");
    $('#owl-carousel2').find(".owl-item>div").eq(current + 1).css("opacity", "0.1");
});
$(".owl-item.active >div").css("opacity", "1");

$(".card-overlayy").hover(function () {
        var index = $(this).index();
        $(".card-overlayy").eq(index).find("div.show-info").css("display", "block");
        $(".card-overlayy").eq(index).find("div.show-info1").css("display", "block");
        console.log(index);
    },
    function () {
        var index = $(this).index();
        $(".card-overlayy").eq(index).find("div.show-info").css("display", "none");
        $(".card-overlayy").eq(index).find("div.show-info1").css("display", "none");
        console.log(index);
    });
$(".card-overlayy1").hover(function () {
        var index = $(this).index();
        $(".card-overlayy1").eq(index).find("div.show-info").css("display", "block");
        $(".card-overlayy1").eq(index).find("div.show-info1").css("display", "block");
        console.log(index);
    },
    function () {
        var index = $(this).index();
        $(".card-overlayy1").eq(index).find("div.show-info").css("display", "none");
        $(".card-overlayy1").eq(index).find("div.show-info1").css("display", "none");
        console.log(index);
    });
$(".card-overlayy2").hover(function () {
        var index = $(this).index();
        $(".card-overlayy2").eq(index).find("div.show-info").css("display", "block");
        $(".card-overlayy2").eq(index).find("div.show-info1").css("display", "block");
        console.log(index);
    },
    function () {
        var index = $(this).index();
        $(".card-overlayy2").eq(index).find("div.show-info").css("display", "none");
        $(".card-overlayy2").eq(index).find("div.show-info1").css("display", "none");
        console.log(index);
    });