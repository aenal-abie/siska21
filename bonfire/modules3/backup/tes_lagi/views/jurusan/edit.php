
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($tes_lagi) ) {
    $tes_lagi = (array)$tes_lagi;
}
$id = isset($tes_lagi['id']) ? $tes_lagi['id'] : '';
?>
<div class="admin-box">
    <h3>Tes Lagi</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                12 => 12,
); ?>

        <?php echo form_dropdown('tes_lagi_nama', $options, set_value('tes_lagi_nama', isset($tes_lagi['tes_lagi_nama']) ? $tes_lagi['tes_lagi_nama'] : ''), 'Nama'. lang('bf_form_label_required'))?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Tes Lagi" />
            or <?php echo anchor(SITE_AREA .'/jurusan/tes_lagi', lang('tes_lagi_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Tes_Lagi.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('tes_lagi_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('tes_lagi_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
