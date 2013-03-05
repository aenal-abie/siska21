
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($departemen) ) {
    $departemen = (array)$departemen;
}
$id = isset($departemen['kode_departemen']) ? $departemen['kode_departemen'] : '';
?>
<div class="admin-box">
    <h3>Departemen</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('departemen_nama_departemen') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Departemen'. lang('bf_form_label_required'), 'departemen_nama_departemen', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="departemen_nama_departemen" type="text" name="departemen_nama_departemen" maxlength="50" value="<?php echo set_value('departemen_nama_departemen', isset($departemen['nama_departemen']) ? $departemen['nama_departemen'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('departemen_nama_departemen'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Departemen" />
            or <?php echo anchor(SITE_AREA .'/manajemen/departemen', lang('departemen_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Departemen.Manajemen.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('departemen_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('departemen_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
