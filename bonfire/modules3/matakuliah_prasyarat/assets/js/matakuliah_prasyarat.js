var kode;
var urla;
$(document).ready(function(){
	$('#matakuliah').hide();
                 
    //jika ada event onchange ambil data dari database
 $('#kode_nama_kurikulum').change(function(){
	kode = $("#kode_nama_kurikulum").val();       
	urla= $("#url").val();
    urla = urla + '/'+kode;
    if(kode!=''){
        $('#matakuliah').fadeOut("slow").load(urla).fadeIn("slow");
    } else {
        $('#matakuliah').hide();
    }
});
});