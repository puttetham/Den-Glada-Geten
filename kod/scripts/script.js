$(function () {
    var images = [];
    var files = ['images/gallery-images/3lq7goxv.bmp', 'images/gallery-images/ybw4mnke.bmp', 'images/gallery-images/3lq7goxv.bmp', 'images/gallery-images/8dfqwfjw.bmp', 'images/gallery-images/snc18tji.bmp', 'images/gallery-images/ybw4mnke.bmp','images/gallery-images/3lq7goxv.bmp'];

    for (var i = 0; i < files.length; i++) {
        var image = new Image();
        image.src = files[i];
        image.className = 'gallery-img';
        images.push(image);
    }

    for (var i = 0; i < images.length; i++) {
        $('#gallery').append(images[i]);
    }

    var i = 0;

    $('.gallery-img').on('click', function() {
        $('#big-img').attr('src', this.src);
        i = $(this).index();
        console.log(i);
        $('#lightbox').css('display', 'block');
    });



    $('#r-arrow').on('click', function() {
        console.log(i);
        if (i > images.length-1) {
            i = 0;
        } else {
            i++;
        }
         $('#big-img').attr('src', images[i].src);
    });

    $('#l-arrow').on('click', function() {
        console.log(i);
        if(i < 1) {
            i = images.length -1;
        } else {
            i--;
        }
         $('#big-img').attr('src', images[i].src);
    });

    $('#close').on('click', function() {
        $('#lightbox').css('display', 'none');
    })
});
