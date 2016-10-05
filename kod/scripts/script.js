window.onload = init();

function init() {

    var images = document.getElementsByClassName('gallery-img');
    var bigImg = document.getElementById('big-img');

    for (var i = 0; i < images.length; i++) {
        images[i].addEventlistener('click', function() {expandImg(this)} );
    }

  function expandImg(evt) {

  }
}
