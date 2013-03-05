
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($jenjang) ) {
    $jenjang = (array)$jenjang;
}
$id = isset($jenjang['kode_jenjang']) ? $jenjang['kode_jenjang'] : '';
?>
<div class="well">

<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('jenjang_kode_jenjang') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Jenjang'. lang('bf_form_label_required'), 'jenjang_kode_jenjang', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="jenjang_kode_jenjang" type="text" name="jenjang_kode_jenjang" maxlength="1" value="<?php echo set_value('jenjang_kode_jenjang', isset($jenjang['kode_jenjang']) ? $jenjang['kode_jenjang'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('jenjang_kode_jenjang'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('jenjang_nama_jenjang') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Jenjang'. lang('bf_form_label_required'), 'jenjang_nama_jenjang', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="jenjang_nama_jenjang" type="text" name="jenjang_nama_jenjang" maxlength="20" value="<?php echo set_value('jenjang_nama_jenjang', isset($jenjang['nama_jenjang']) ? $jenjang['nama_jenjang'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('jenjang_nama_jenjang'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Jenjang" />
            or <?php echo anchor(SITE_AREA .'/jurusan/jenjang', lang('jenjang_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Jenjang.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('jenjang_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('jenjang_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
