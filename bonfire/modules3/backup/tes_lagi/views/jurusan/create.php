
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



        <?php echo form_dropdown('tes_lagi_nama', $options, set_value('tes_lagi_nama', isset($tes_lagi['tes_lagi_nama']) ? $tes_lagi['tes_lagi_nama'] : ''), 'Nama'. lang('bf_form_label_required'))?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Tes Lagi" />
            or <?php echo anchor(SITE_AREA .'/jurusan/tes_lagi', lang('tes_lagi_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
