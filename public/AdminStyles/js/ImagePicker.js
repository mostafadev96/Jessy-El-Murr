$(document).ready(function () {
    $("#selectImage").imagepicker({
        hide_select: true,
        clicked:function (option) {
            var values = this.val();
            $('#selectedPhotos').val(values);
        }
    });

    var $container = $('.image_picker_selector');
    // initialize
    $container.imagesLoaded(function () {
        $container.masonry({
            columnWidth: 30,
            itemSelector: '.thumbnail'
        });
    });
});