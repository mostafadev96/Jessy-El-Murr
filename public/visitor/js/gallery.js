$(".card-overlay").hover(function () {
        var index = $(this).parent().index();
        $(".card-overlay").eq(index).find("div.show-info").css("display", "block");
        $(".card-overlay").eq(index).find("div.show-info1").css("display", "block");
        console.log(index);
    },
    function () {
        var index = $(this).parent().index();
        $(".card-overlay").eq(index).find("div.show-info").css("display", "none");
        $(".card-overlay").eq(index).find("div.show-info1").css("display", "none");
        console.log(index);
    });