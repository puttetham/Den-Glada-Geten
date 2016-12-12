var gallery = {
    images: [],
    currImg: 0,
    init: function() {
        this.cacheDom();
        this.indexImages();
        this.scaleImg();
        this.bindEvents();
    },
    cacheDom: function() {
        this.$el = $('#gallery-content');
        this.$thumb = this.$el.find('.gallery-img');
        this.$expanded = this.$el.find('#big-img');
        this.$lightbox = this.$el.find('#lightbox');
        this.$left = this.$el.find('#arrow-left');
        this.$right = this.$el.find('#arrow-right');
    },
    indexImages: function() {
        var app = this;
        this.$thumb.one('load', function() {
            app.setClass(this);
        }).each(function() {
            app.images.push(this.src);
        });
    },
    bindEvents: function() {
        this.$thumb.on('click', this.expand);
        this.$left.on('click', this.prevImg.bind(this));
        this.$right.on('click', this.nextImg.bind(this));
        this.$lightbox.on('click', this.close);
        $(window).on('resize', this.scaleImg);
    },
    setClass: function(image) {
        var height = $(image).height();
        var width = $(image).width();
        var imgClass = ( ( height / width ) < 1) ? 'wide' : 'tall';
        $(image).addClass(imgClass);
    },
    scaleImg: function() {
        var width = $('.img-frame').width();
        $('.img-frame').css({'height': + width + 'px'});
    },
    expand: function() {
        gallery.$expanded.prop('src', this.src);
        gallery.$lightbox.css('display', 'block');
        gallery.currImg = gallery.$thumb.index(this);
    },
    prevImg: function() {
        this.currImg--;
        if (this.currImg < 0) {
            this.currImg = this.images.length -1;
        }
        this.$expanded.prop('src', this.images[this.currImg]);
    },
    nextImg: function() {
        this.currImg++;
        if (this.currImg > this.images.length - 1) {
            this.currImg = 0;
        }
        this.$expanded.prop('src', this.images[this.currImg]);
    },
    close: function(e) {
        var id = e.target.id;
        var c = e.target.classList;
        if (id == 'big-img' || c.contains('arrow')) {
            return;
        }
        else {
            $(this).css('display', 'none');
        }
    }
};

$(function() {
    gallery.init();
});
