$(function () {
    var index = "";
    $('.gallery-img').on('click', function() {
        $('#big-img').attr('src', this.src);
        index = $(this).index();
        $('#lightbox').css('display', 'block');
    });

    // $('#lightbox').on('click', function() {
    //     $(this).css('display', 'none');
    // });

    $('#r-arrow').on('click', function() {
         $('#big-img').attr('src', $('.gallery-img'));
    });
});
