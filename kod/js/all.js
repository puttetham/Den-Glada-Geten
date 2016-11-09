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

	var menu = $('#mobile-slide-menu');

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
    dayNames: ['Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag', 'Söndag'],
    dayNamesMin: ['Sön', 'Mån', 'Tis', 'Ons', 'Tor', 'Fre', 'Lör', 'Sön'],
    firstDay: 1,
    monthNames: ['Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December'],

    });

    $('#arrival-date').datepicker({
        minDate: new Date(),
        onSelect: function(date){
            var selectedDate = new Date(date);
            var msecsInADay = 86400000;
            var endDate = new Date(selectedDate.getTime() + msecsInADay);

            $("#depart-date").datepicker( "option", "minDate", endDate );
        }
    });
});
