//KALENDER
$(document).ready(function() {
    $.validator.addMethod(
    "australianDate",
    function(value, element) {
        // put your own logic here, this is just a (crappy) example
        return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
    },
    "Please enter a date in the format dd/mm/yyyy."
);
    $('form[name="booking-form"]').validate({
        rules: {
            firstname: 'required',
            lastname: 'required',
            email: {
                required: true,
                email: true
            },
            confirm_email: {
                equalTo: '#email',
                required: true,
                email: true
            }
        },
        roomtype: {
            required: true,
        },
        arrival_date: {
            required: true,
            date: true
        },
        depart_date: {
            required: true,
            date: true
        },

        messages: {
            firstname: 'Fyll i ditt förnamn',
            lastname: 'Fyll i ditt efternamn',
            email: 'Fyll i en giltig e-postadress',
            confirm_email: 'E-postadresserna måste matcha',
            roomtype: 'Välj ett rum',
            arrival_date: 'Fyll i incheckningsdatum',
            depart_date: 'Fyll i utcheckningsdatum'
        },

        // errorPlacement: function(error, element) {
        //     console.log(element, error);
        //     error.appendTo(element);
        // },
        submitHandler: function(form) {
            form.submit();
        }

    });

  $('#arrival-date').datepicker({
      dateFormat: "yy-mm-dd",
      dayNames: ['Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag', 'Söndag'],
      dayNamesMin: ['Sön', 'Mån', 'Tis', 'Ons', 'Tor', 'Fre', 'Lör', 'Sön'],
      firstDay: 1,
      monthNames: ['Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December'],
      minDate: new Date(),
      onSelect: function(date){
          var selectedDate = new Date(date);
          var msecsInADay = 86400000;
          var endDate = new Date(selectedDate.getTime() + msecsInADay);

          $("#depart-date").datepicker( "option", "minDate", endDate );
      }
  });

  $('#depart-date').datepicker({
      dateFormat: "yy-mm-dd",
      dayNames: ['Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag', 'Söndag'],
      dayNamesMin: ['Sön', 'Mån', 'Tis', 'Ons', 'Tor', 'Fre', 'Lör', 'Sön'],
      firstDay: 1,
      minDate: 0,
      monthNames: ['Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December']
  });

});
