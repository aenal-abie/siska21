<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($kompetensi) ) {
    $kompetensi = (array)$kompetensi;
}
$id = isset($kompetensi['id']) ? $kompetensi['id'] : '';
?>
<div class="admin-box">
    <h3>Kompetensi</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('kode_kompetensi') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Kompetensi'. lang('bf_form_label_required'), 'kode_kompetensi', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="kode_kompetensi" type="text" name="kode_kompetensi" maxlength="2" value="<?php echo set_value('kode_kompetensi', isset($kompetensi['kode_kompetensi']) ? $kompetensi['kode_kompetensi'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('kode_kompetensi'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $kosong = array(
                '' => 'data kosong',
); ?>

        <?php echo form_dropdown('kode_nama_jurusan',isset($options)? $options:$kosong, set_value('kode_nama_jurusan', isset($kompetensi['kode_nama_jurusan']) ? $kompetensi['kode_nama_jurusan'] : ''), 'Kode Nama Jurusan'. lang('bf_form_label_required'),"class='chzn-select'")?>
             
           <div class="control-group <?php echo form_error('nama_kompetensi') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Kompetensi'. lang('bf_form_label_required'), 'nama_kompetensi', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="nama_kompetensi" type="text" name="nama_kompetensi" maxlength="30" value="<?php echo set_value('nama_kompetensi', isset($kompetensi['nama_kompetensi']) ? $kompetensi['nama_kompetensi'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('nama_kompetensi'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Kompetensi" />
            or <?php echo anchor(SITE_AREA .'/jurusan/kompetensi', lang('kompetensi_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
<script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
