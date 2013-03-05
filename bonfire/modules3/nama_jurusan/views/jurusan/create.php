<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($nama_jurusan) ) {
    $nama_jurusan = (array)$nama_jurusan;
}
$id = isset($nama_jurusan['kode_nama_jurusan']) ? $nama_jurusan['kode_nama_jurusan'] : '';
?>
<div class="admin-box">
    <h3>Nama Jurusan</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
       <?php // Change the values in this array to populate your dropdown as required 
        $kosong = array(
                "" => "Data Kosong");
                ?>
        <?php echo form_dropdown('nama_jurusan_kode_jurusan', isset($jurusan) ? $jurusan : $kosong, set_value('nama_jurusan_kode_jurusan', isset($nama_jurusan['nama_jurusan_kode_jurusan']) ? $nama_jurusan['nama_jurusan_kode_jurusan'] : ''), 'Jurusan '. lang('bf_form_label_required'),'class="chzn-select" data-placeholder="Pilih Jurusan..."')?>

        <?php // Change the values in this array to populate your dropdown as required ?>

        <?php echo form_dropdown('nama_jurusan_kode_jenjang', isset($jenjang) ? $jenjang: $kosong, set_value('nama_jurusan_kode_jenjang', isset($nama_jurusan['nama_jurusan_kode_jenjang']) ? $nama_jurusan['nama_jurusan_kode_jenjang'] : ''), 'Jenjang '. lang('bf_form_label_required'), 'class="chzn-select" data-placeholder="Pilih Jenjang..."')?>        
        <div class="control-group <?php echo form_error('nama_jurusan_nama_jurusan') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Jurusan '. lang('bf_form_label_required'), 'nama_jurusan_nama_jurusan', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="nama_jurusan_nama_jurusan" type="text" name="nama_jurusan_nama_jurusan" maxlength="80" value="<?php echo set_value('nama_jurusan_nama_jurusan', isset($nama_jurusan['nama_jurusan_nama_jurusan']) ? $nama_jurusan['nama_jurusan_nama_jurusan'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('nama_jurusan_nama_jurusan'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('nama_jurusan_singkatan_jurusan') ? 'error' : ''; ?>">
            <?php echo form_label('Singkatan Jurusan '. lang('bf_form_label_required'), 'nama_jurusan_singkatan_jurusan', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="nama_jurusan_singkatan_jurusan" type="text" name="nama_jurusan_singkatan_jurusan" maxlength="4" value="<?php echo set_value('nama_jurusan_singkatan_jurusan', isset($nama_jurusan['nama_jurusan_singkatan_jurusan']) ? $nama_jurusan['nama_jurusan_singkatan_jurusan'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('nama_jurusan_singkatan_jurusan'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Nama Jurusan" />
            or <?php echo anchor(SITE_AREA .'/jurusan/nama_jurusan', lang('nama_jurusan_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
 <script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
