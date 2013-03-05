<script>
var link;
var kode_jenis_pembayaran;
var denga;
$(document).ready(function(){
    $('#view_jumlah').hide();
    $("#kode_jenis_pembayaran").change(function(){     
        //lakukan pengiriman dan pengambilan data nim mahasiswa
        kode_jenis_pembayaran=$('#kode_jenis_pembayaran').val();
        if ($("input[name='denda']").is(":checked"))
        {
            link = $('#url').val()+'/2/'+kode_jenis_pembayaran;    
        }  else 
        {
            link = $('#url').val()+'/1/'+kode_jenis_pembayaran;    
        }
        //alert(link);
        if(kode_jenis_pembayaran!=''){
            $('#view_jumlah').fadeOut("slow").load(link).fadeIn("slow");  
              
        } else {
            $('#view_jumlah').hide();
            $('#denda').removeAttr("checked")
        }			
    }); 
    $("#denda").change(function(){     
        //lakukan pengiriman dan pengambilan data nim mahasiswa
        kode_jenis_pembayaran=$('#kode_jenis_pembayaran').val();
        if ($("input[name='denda']").is(":checked"))
        {
            link = $('#url').val()+'/2/'+kode_jenis_pembayaran;    
        }  else 
        {
            link = $('#url').val()+'/1/'+kode_jenis_pembayaran;    
        }
        
        //alert(link);
        if(kode_jenis_pembayaran!=''){
            $('#view_jumlah').fadeOut("slow").load(link).fadeIn("slow");    
        } else {
            $('#view_jumlah').hide();
        }			
        });  
	});	    
</script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />
<div class="page-header">
  <h3>Pembayaran Kuliah <small>Tahun Akademik <?php echo $tahun_akademik; ?> Semester <?php echo $semester_huruf; ?></a></small></h3>
</div>
<input name="kode_tahun_akademik" type="hidden" value="<?php echo $kode_tahun_akademik; ?>" />
<input type="hidden"  name="url" id="url" value="<?php echo base_url(SITE_AREA.'/keuangan/pembayaran/get_jumlah_pembayaran'); ?>" />
<?php
if(!empty($jenis_pembayaran)){ //print_r($jenis_pembayaran); ?>
<select id="kode_jenis_pembayaran" name='kode_jenis_pembayaran' data-placeholder="Pilih Jenis Pembayaran..."   class="span12 chzn-select"  >
<option value=""></option>  
<?php  
    foreach ($jenis_pembayaran as $row)
        {
            $jumlah[$row->kode_jenis_pembayaran] = $row->jumlah;
            echo " <option value=\"$row->kode_jenis_pembayaran\">$row->jenis_pembayaran</option> ";                   
        }
        
        ?>
        </select>
        <div class="control-group">
            <div class='controls'> 
                <label class="checkbox">
                    <input name="denda" id="denda" value="Y" type="checkbox">
                    <h5>Pembayaran Denda</h5>
                </label>
            </div>
        </div>
        <?php
    }
?>


<div id="status"></div>
<div id="view_jumlah"></div>
<script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
