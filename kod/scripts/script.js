$(document).ready(function () {
    var images = [];
    var files = ['images/gallery-images/3lq7goxv.bmp', 'images/gallery-images/ybw4mnke.bmp', 'images/gallery-images/98699_ca_object_representations_media_2636_large.jpg', 'images/gallery-images/cropped-P1000045small.jpg', 'images/gallery-images/8dfqwfjw.bmp', 'images/gallery-images/stor_vandrarhem_rum3_stor.png', 'images/gallery-images/snc18tji.bmp'];
    var i = 0;
    renderGallery();

// Expandera klickad bild på skärmen
    $('.gallery-img').on('click', function() {
        $('#big-img').prop('src', this.src);
        i = $(this).index();
        $('#lightbox').css('display', 'block');
    });

// Bläddra med pilarna på skärmen
    $('.arrow').on('click', function() {
        this.id == 'arrow-right' ? i++ : i--;
        if(i < 0) {
            i = images.length -1;
        }
        if(i > images.length -1) {
            i = 0;
        }

        $('#big-img').prop('src', images[i].src);
    });
// Bläddra med piltangenterna
    $('body').keyup(function(e) {
        if (e.keyCode == 37) {
            i--;
        }
        if (e.keyCode == 39) {
            i++;
        }

        if(i < 0) {
            i = images.length -1;
        }
        if(i > images.length -1) {
            i = 0;
        }
        console.log(i);
        $('#big-img').prop('src', images[i].src);
    })
// Stäng ner expanderad bild genom att klicka på krysset eller på lightbox-diven
    $('#close').on('click', function() {
        $('#lightbox').css('display', 'none');
    });

    $('#lightbox-inner').on('click', function(e) {
        if (e.target !== this) {
            return;
        }
        $('#lightbox').css('display', 'none');
    });


    $('#lightbox').on('click', function(e) {
        if (e.target !== this) {
            return;
        }
        $('#lightbox').css('display', 'none');
    });

    //Bestäm om bilden är bredare än den är hög
    function determineImgClass() {
        var imgClass = ((this.height/this.width) < 1) ? ' wide' : ' tall';
        console.log(this);
        console.log(this.height/this.width);
        return this.className += imgClass;
    }

    // Rendera  bilden på HTML-sidan i sektionen gallery
    function displayImages(img) {
            var div = $('<div class="img-frame"></div>');
            div.append(img);
            $('#gallery').append(div);
            img.onload = determineImgClass;
    }

    // Lägger till befintliga bilder i variabeln images
    function renderGallery() {
        for (var i = 0; i < files.length; i++) {
            var image = new Image();
            image.src = files[i];
            image.className = 'gallery-img';
            images.push(image);
            displayImages(image);
        }
    }
});
