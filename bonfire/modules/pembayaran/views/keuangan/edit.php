
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($pembayaran) ) {
    $pembayaran = (array)$pembayaran;
}
$id = isset($pembayaran['kode_pembayaran']) ? $pembayaran['kode_pembayaran'] : '';
?>
<div class="admin-box">
    <h3>Pembayaran</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('pembayaran_kode_tahun_akademik') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Tahun Akademik', 'pembayaran_kode_tahun_akademik', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="pembayaran_kode_tahun_akademik" type="text" name="pembayaran_kode_tahun_akademik" maxlength="1" value="<?php echo set_value('pembayaran_kode_tahun_akademik', isset($pembayaran['kode_tahun_akademik']) ? $pembayaran['kode_tahun_akademik'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('pembayaran_kode_tahun_akademik'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Pembayaran" />
            or <?php echo anchor(SITE_AREA .'/keuangan/pembayaran', lang('pembayaran_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Pembayaran.Keuangan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('pembayaran_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('pembayaran_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
