<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />
 <?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
 <div class="well">   
    <legend>Pilih Kurikulum</legend>
        <?php // Change the values in this array to populate your dropdown as required ?>

        <?php $kosong = array(
                        "" => "Tidak Ada Kurikulum",
        ); ?>

        <?php echo form_dropdown('kode_nama_kurikulum', isset($options) ? $options : $kosong, set_value('kode_nama_kurikulum', isset($matakuliah_prasyarat['kode_nama_kurikulum']) ? $matakuliah_prasyarat['kode_nama_kurikulum'] : ''), 'Nama Kurikulum Aktif','id="kode_nama_kurikulum" class="chzn-select" data-placeholder="Pilih Kurikulum..."')?>
        
        <input name="url" id="url" type="hidden" value="<?php echo base_url().SITE_AREA; ?>/jurusan/matakuliah_prasyarat/all_mk_kurikulum" />
        <div style=" margin-top:10px;  margin-bottom:10px;" id="matakuliah" ></div>
        
        <div style=" margin-top:10px;  margin-bottom:10px;" id="prasyarat" >
        </div>
        
        </div>
 <script src="<?php echo base_url() ?>assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
