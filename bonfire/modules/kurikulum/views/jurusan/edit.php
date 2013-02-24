
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($kurikulum) ) {
    $kurikulum = (array)$kurikulum;
}
$id = isset($kurikulum['kode_kurikulum']) ? $kurikulum['kode_kurikulum'] : '';
?>
<div class="admin-box">
    <h3>Kurikulum</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                1 => 1,
); ?>

        <?php echo form_dropdown('kurikulum_kode_nama_kurikulum', $options, set_value('kurikulum_kode_nama_kurikulum', isset($kurikulum['kurikulum_kode_nama_kurikulum']) ? $kurikulum['kurikulum_kode_nama_kurikulum'] : ''), 'Kode Nama Kurikulum'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('kurikulum_kode_matakuliah') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Matakuliah'. lang('bf_form_label_required'), 'kurikulum_kode_matakuliah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="kurikulum_kode_matakuliah" type="text" name="kurikulum_kode_matakuliah" maxlength="10" value="<?php echo set_value('kurikulum_kode_matakuliah', isset($kurikulum['kode_matakuliah']) ? $kurikulum['kode_matakuliah'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('kurikulum_kode_matakuliah'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Kurikulum" />
            or <?php echo anchor(SITE_AREA .'/jurusan/kurikulum', lang('kurikulum_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Kurikulum.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('kurikulum_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('kurikulum_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
