var Gallery = {

    images: [],
    currImg: 0,

    init: function() {
        this.bindEvents();
    },

    bindEvents: function() {
        $('.gallery-img').click(this.expand);

        $('.gallery-img').one('load', function() {
            Gallery.determineImgClass(this);
        }).each(function() {
            // if(this.complete){
                // $(this).load();
                // console.log(this.src);
                Gallery.index(this.src);
            // }
        });

        $('.arrow').click(this.switchImg);

        $('#close').on('click', function() {
            $('#lightbox').css('display', 'none');
        });

        $('#lightbox, #lightbox-inner, #centerer').on('click', function(e) {
            if (e.target !== this) {
                return;
            }
            $('#lightbox').css('display', 'none');
        });

        var width = $('.img-frame').width();
        $('.img-frame').css({'height': + width + 'px'});

        $(window).resize(function() {
            var width = $('.img-frame').width();
            $('.img-frame').css({'height': + width + 'px'});
        });
    },

    determineImgClass: function(image) {
        var height = $(image).height();
        var width = $(image).width();
        var imgClass = ( ( height / width ) < 1) ? 'wide' : 'tall';
        $(image).addClass(imgClass);
    },

    index: function(source) {
        Gallery.images.push(source);
    },

    expand: function() {
        $('#big-img').prop('src', this.src);
        $('#lightbox').css('display', 'block');
        Gallery.currImg = ($('.gallery-img').index(this));
    },

    switchImg: function() {
        var id = this.id;
        var images = Gallery.images;

        if (id == 'arrow-right') {
            Gallery.currImg++;
        }
        else if (id == 'arrow-left') {
            Gallery.currImg--;
        }

        if (Gallery.currImg < 0) {
            Gallery.currImg = images.length - 1;
        }

        if (Gallery.currImg > images.length - 1) {
            Gallery.currImg = 0;
        }

        $('#big-img').prop('src', images[Gallery.currImg]);

    }
};

$(function() {
    Gallery.init();
});
