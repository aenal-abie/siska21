
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($matakuliah_prasyarat) ) {
    $matakuliah_prasyarat = (array)$matakuliah_prasyarat;
}
$id = isset($matakuliah_prasyarat['kode_matakuliah_prasyarat']) ? $matakuliah_prasyarat['kode_matakuliah_prasyarat'] : '';
?>
<div class="admin-box">
    <h3>Matakuliah Prasyarat</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                1 => 1,
); ?>

        <?php echo form_dropdown('kode_nama_kurikulum', $options, set_value('kode_nama_kurikulum', isset($matakuliah_prasyarat['kode_nama_kurikulum']) ? $matakuliah_prasyarat['kode_nama_kurikulum'] : ''), 'Kode Nama Kurikulum'. lang('bf_form_label_required'))?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Matakuliah Prasyarat" />
            or <?php echo anchor(SITE_AREA .'/jurusan/matakuliah_prasyarat', lang('matakuliah_prasyarat_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Matakuliah_Prasyarat.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('matakuliah_prasyarat_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('matakuliah_prasyarat_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
