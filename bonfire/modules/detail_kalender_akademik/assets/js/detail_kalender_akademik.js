
$( "#detail_kalender_akademik_tanggal_mulai" ).datepicker({
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 1,
    dateFormat: 'yy-mm-dd',
    onClose: function( selectedDate ) {
        $( "#detail_kalender_akademik_tanggal_berakhir" ).datepicker( "option", "minDate", selectedDate );
    }
});

$( "#detail_kalender_akademik_tanggal_berakhir" ).datepicker({
    changeMonth: true,
    changeYear: true,
    numberOfMonths: 4,
    dateFormat: 'yy-mm-dd',
    onClose: function( selectedDate ) {
        $( "#detail_kalender_akademik_tanggal_mulai" ).datepicker( "option", "maxDate", selectedDate );
    }
});