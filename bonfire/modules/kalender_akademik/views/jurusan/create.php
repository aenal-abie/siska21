
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($kalender_akademik) ) {
    $kalender_akademik = (array)$kalender_akademik;
}
$id = isset($kalender_akademik['id']) ? $kalender_akademik['id'] : '';
?>
<div class="admin-box">
    <h3>Kalender Akademik</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('kalender_akademik_kode_kalender_akademik') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Kalender Akademik'. lang('bf_form_label_required'), 'kalender_akademik_kode_kalender_akademik', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="kalender_akademik_kode_kalender_akademik" type="text" name="kalender_akademik_kode_kalender_akademik" maxlength="2" value="<?php echo set_value('kalender_akademik_kode_kalender_akademik', isset($kalender_akademik['kode_kalender_akademik']) ? $kalender_akademik['kode_kalender_akademik'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('kalender_akademik_kode_kalender_akademik'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('kalender_akademik_deskripsi_kalender_akademik') ? 'error' : ''; ?>">
            <?php echo form_label('Deskripsi Kalender Akademik'. lang('bf_form_label_required'), 'kalender_akademik_deskripsi_kalender_akademik', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="kalender_akademik_deskripsi_kalender_akademik" type="text" name="kalender_akademik_deskripsi_kalender_akademik" maxlength="40" value="<?php echo set_value('kalender_akademik_deskripsi_kalender_akademik', isset($kalender_akademik['deskripsi_kalender_akademik']) ? $kalender_akademik['deskripsi_kalender_akademik'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('kalender_akademik_deskripsi_kalender_akademik'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Kalender Akademik" />
            or <?php echo anchor(SITE_AREA .'/jurusan/kalender_akademik', lang('kalender_akademik_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
