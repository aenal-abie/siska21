var link;
var kode_jenis_pembayaran;
$(document).ready(function(){
    $('#view_jumlah').hide();
    alert('aaa');
    $("#kode_jenis_pembayaran").change(function(){     
        //lakukan pengiriman dan pengambilan data nim mahasiswa
        link: $('#url').val();
        kode_jenis_pembayaran=$('#kode_jenis_pembayaran').val();			
        $('#view_pembayaran').fadeOut("slow").load(link+kode_jenis_pembayaran).fadeIn("slow");
        });  
	});