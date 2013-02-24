
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($kode_jenis_pembayaran) ) {
    $kode_jenis_pembayaran = (array)$kode_jenis_pembayaran;
}
$id = isset($kode_jenis_pembayaran['kode_jenis_pembayaran']) ? $kode_jenis_pembayaran['kode_jenis_pembayaran'] : '';
?>
<div class="admin-box">
    <h3>Kode Jenis Pembayaran</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('kode_jenis_pembayaran_kode_jenis_pembayaran') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Jenis Pembayaran'. lang('bf_form_label_required'), 'kode_jenis_pembayaran_kode_jenis_pembayaran', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="kode_jenis_pembayaran_kode_jenis_pembayaran" type="text" name="kode_jenis_pembayaran_kode_jenis_pembayaran" maxlength="2" value="<?php echo set_value('kode_jenis_pembayaran_kode_jenis_pembayaran', isset($kode_jenis_pembayaran['kode_jenis_pembayaran']) ? $kode_jenis_pembayaran['kode_jenis_pembayaran'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('kode_jenis_pembayaran_kode_jenis_pembayaran'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('kode_jenis_pembayaran_jenis_pembayaran') ? 'error' : ''; ?>">
            <?php echo form_label('Jenis Pembayaran'. lang('bf_form_label_required'), 'kode_jenis_pembayaran_jenis_pembayaran', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="kode_jenis_pembayaran_jenis_pembayaran" type="text" name="kode_jenis_pembayaran_jenis_pembayaran" maxlength="50" value="<?php echo set_value('kode_jenis_pembayaran_jenis_pembayaran', isset($kode_jenis_pembayaran['jenis_pembayaran']) ? $kode_jenis_pembayaran['jenis_pembayaran'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('kode_jenis_pembayaran_jenis_pembayaran'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Kode Jenis Pembayaran" />
            or <?php echo anchor(SITE_AREA .'/keuangan/kode_jenis_pembayaran', lang('kode_jenis_pembayaran_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
