// karta
var map;
var stockholm = {lat: 65.660, lng: 21.975};

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: stockholm,
    zoom: 8,
    scrollwheel: false

  });
  var marker = new google.maps.Marker({
      position: stockholm,
      map: map
  });
}

//menu slide
$(document).ready(function(){

	var menu = $('#mobile-slide-menu')

	$('#menu-bar').click(function(event){
		event.preventDefault();

		if (menu.is(":visible"))
		{
			menu.slideUp(400);
			$(this).removeClass("open");
		}

		else
		{
			menu.slideDown(400);
			$(this).addClass("open");
		}
	});
  //KALENDER
  $(".datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0
  });
});
