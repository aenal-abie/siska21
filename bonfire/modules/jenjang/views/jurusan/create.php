
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
$id = isset($jenjang['id']) ? $jenjang['id'] : '';
?>
<div class="admin-box">
    <h3>Jenjang</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('jenjang_kode_jenjang') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Jenjang'. lang('bf_form_label_required'), 'jenjang_kode_jenjang', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="jenjang_kode_jenjang" type="text" name="jenjang_kode_jenjang" maxlength="1" value="<?php echo set_value('jenjang_kode_jenjang', isset($jenjang['jenjang_kode_jenjang']) ? $jenjang['jenjang_kode_jenjang'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('jenjang_kode_jenjang'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('jenjang_nama_jenjang') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Jenjang'. lang('bf_form_label_required'), 'jenjang_nama_jenjang', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="jenjang_nama_jenjang" type="text" name="jenjang_nama_jenjang" maxlength="20" value="<?php echo set_value('jenjang_nama_jenjang', isset($jenjang['jenjang_nama_jenjang']) ? $jenjang['jenjang_nama_jenjang'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('jenjang_nama_jenjang'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Jenjang" />
            or <?php echo anchor(SITE_AREA .'/jurusan/jenjang', lang('jenjang_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
