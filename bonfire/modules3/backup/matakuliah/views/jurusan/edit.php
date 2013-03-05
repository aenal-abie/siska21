
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($matakuliah) ) {
    $matakuliah = (array)$matakuliah;
}
$id = isset($matakuliah['id']) ? $matakuliah['id'] : '';
?>
<div class="admin-box">
    <h3>matakuliah</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('matakuliah_kode_matakuliah') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Matakuliah'. lang('bf_form_label_required'), 'matakuliah_kode_matakuliah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_kode_matakuliah" type="text" name="matakuliah_kode_matakuliah" maxlength="10" value="<?php echo set_value('matakuliah_kode_matakuliah', isset($matakuliah['kode_matakuliah']) ? $matakuliah['kode_matakuliah'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_kode_matakuliah'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_nama_matakuliah') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Matakuliah', 'matakuliah_nama_matakuliah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_nama_matakuliah" type="text" name="matakuliah_nama_matakuliah" maxlength="75" value="<?php echo set_value('matakuliah_nama_matakuliah', isset($matakuliah['nama_matakuliah']) ? $matakuliah['nama_matakuliah'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_nama_matakuliah'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_teori') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Teori', 'matakuliah_sks_teori', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_teori" type="text" name="matakuliah_sks_teori" maxlength="1" value="<?php echo set_value('matakuliah_sks_teori', isset($matakuliah['sks_teori']) ? $matakuliah['sks_teori'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_teori'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_praktek') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Praktek', 'matakuliah_sks_praktek', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_praktek" type="text" name="matakuliah_sks_praktek" maxlength="1" value="<?php echo set_value('matakuliah_sks_praktek', isset($matakuliah['sks_praktek']) ? $matakuliah['sks_praktek'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_praktek'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_praktikum') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Praktikum', 'matakuliah_sks_praktikum', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_praktikum" type="text" name="matakuliah_sks_praktikum" maxlength="1" value="<?php echo set_value('matakuliah_sks_praktikum', isset($matakuliah['sks_praktikum']) ? $matakuliah['sks_praktikum'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_praktikum'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit matakuliah" />
            or <?php echo anchor(SITE_AREA .'/jurusan/matakuliah', lang('matakuliah_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Matakuliah.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('matakuliah_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('matakuliah_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
