
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
$kode_kalender_akademik = isset($kalender_akademik['kode_kalender_akademik']) ? $kalender_akademik['kode_kalender_akademik'] : '';
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
        <input id="deskripsi_lama" type="hidden" name="deskripsi_lama" value="<?php echo set_value('kalender_akademik_deskripsi_kalender_akademik', isset($kalender_akademik['deskripsi_kalender_akademik']) ? $kalender_akademik['deskripsi_kalender_akademik'] : ''); ?>" />
        <span class="help-inline"><?php echo form_error('kalender_akademik_deskripsi_kalender_akademik'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Kalender Akademik" />
            or <?php echo anchor(SITE_AREA .'/jurusan/kalender_akademik', lang('kalender_akademik_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Kalender_Akademik.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('kalender_akademik_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('kalender_akademik_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
