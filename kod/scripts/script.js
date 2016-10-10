// window.onload = init;
//
// function init() {
//
//     var images = document.getElementsByClassName('gallery-img');
//     var bigImg = document.getElementById('big-img');
//     var lightBox = document.getElementById('lightbox');
//
//     for (var i = 0; i < images.length; i++) {
//         images[i].addEventlistener('click', function() {expandImg(this)} );
//     }
//
//   function expandImg(evt) {
//       alert('hej');
//       lightBox.setAttribute('class', 'expanded');
//       bigImg.setAttribute('src', evt.src);
//   }
// }
$(function () {
    $('.gallery-img').on('click', function() {
        $('#big-img').attr('src', this.src);
        $('#lightbox').css('display', 'block');
    });

    $('#lightbox').on('click', function() {
        $(this).css('display', 'none');
    });
});
