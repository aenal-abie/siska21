<legend>Pilih Matakuliah</legend>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />

 <select name='kode_matakuliah' data-placeholder="Pilih Matakuliah ... " style="width:30%; "  class="chzn-select" > 
        <option value=""></option> 
         <?php  foreach($mk as $row)
                {
                   echo " <option value=\"$row->kode_kurikulum\">$row->kode_matakuliah $row->nama_matakuliah</option> ";                   
                     
                }
          ?>   
        </select>

<legend>Pilih Matakuliah Prasyarat</legend>
 <select name='kode_prasyarat[]' data-placeholder="Pilih Matakuliah Prasyarat..." style="width:98%; "  class="chzn-select" multiple="multiple" >
 <option value=""></option>  
          <?php  foreach($mk as $row)
                {
                   echo " <option value=\"$row->kode_kurikulum\">$row->kode_matakuliah $row->nama_matakuliah</option> ";                   
                     
                }
          ?>
    
        </select>
    </form>
  <script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
 