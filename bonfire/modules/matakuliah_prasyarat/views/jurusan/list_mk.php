<script src="<?php echo base_url() ?>/assets/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
         $('#mk_kurikulum').change(function(){
             kode = $("#mk_kurikulum").val();
             nama_kurikulum= $("#kode_nama_kurikulum").val();
             if(kode!=''){
                //alert(nama_kurikulum);
                $('#prasyarat').fadeOut().load("<?php echo base_url() ?>admin/jurusan/matakuliah_prasyarat/all_syarat/"+kode+"/"+nama_kurikulum).fadeIn("slow");
             } else {
                $('#prasyarat').hide();  
            }  
        });
</script>
<legend>Pilih Matakuliah</legend>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />

 <select id="mk_kurikulum" name='kode_matakuliah' data-placeholder="Pilih Matakuliah ... " style="width:30%; "  class="chzn-select" > 
        <option  value=""></option> 
         <?php  foreach($mk as $row)
                {
                   echo " <option value=\"$row->kode_kurikulum\">$row->kode_matakuliah $row->nama_matakuliah</option> ";                   
                     
                }
          ?>   
        </select>
  <script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
  
  <script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
 