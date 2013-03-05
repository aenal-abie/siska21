
$( "#detail_kalender_akademik_tanggal_mulai" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
dateFormat: 'yy-mm-dd',
onClose: function( selectedDate ) {
$( "#detail_kalender_akademik_tanggal_berakhir" ).datepicker( "option", "minDate", selectedDate );
}
});

$( "#detail_kalender_akademik_tanggal_berakhir" ).datepicker({
changeMonth: true,
numberOfMonths: 2,
maxDate: "1M-1D",
dateFormat: 'yy-mm-dd',
onClose: function( selectedDate ) {
$( "#detail_kalender_akademik_tanggal_mulai" ).datepicker( "option", "maxDate", selectedDate );
}
});
