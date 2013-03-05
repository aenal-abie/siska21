
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($ruang) ) {
    $ruang = (array)$ruang;
}
$id = isset($ruang['kode_ruang']) ? $ruang['kode_ruang'] : '';
?>
<div class="admin-box">
    <h3>Ruang</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                ''K' => ''K',
                'L'' => 'L'',
); ?>

        <?php echo form_dropdown('ruang_jenis_ruang', $options, set_value('ruang_jenis_ruang', isset($ruang['ruang_jenis_ruang']) ? $ruang['ruang_jenis_ruang'] : ''), 'Jenis Ruang'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('ruang_nama_ruang') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Ruang'. lang('bf_form_label_required'), 'ruang_nama_ruang', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="ruang_nama_ruang" type="text" name="ruang_nama_ruang" maxlength="30" value="<?php echo set_value('ruang_nama_ruang', isset($ruang['nama_ruang']) ? $ruang['nama_ruang'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('ruang_nama_ruang'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('ruang_daya_tampung') ? 'error' : ''; ?>">
            <?php echo form_label('Daya Tampung'. lang('bf_form_label_required'), 'ruang_daya_tampung', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="ruang_daya_tampung" type="text" name="ruang_daya_tampung" maxlength="1" value="<?php echo set_value('ruang_daya_tampung', isset($ruang['daya_tampung']) ? $ruang['daya_tampung'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('ruang_daya_tampung'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Ruang" />
            or <?php echo anchor(SITE_AREA .'/manajemen/ruang', lang('ruang_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Ruang.Manajemen.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('ruang_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('ruang_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
