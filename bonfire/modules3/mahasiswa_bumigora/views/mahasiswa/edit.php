
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($mahasiswa_bumigora) ) {
    $mahasiswa_bumigora = (array)$mahasiswa_bumigora;
}
$id = isset($mahasiswa_bumigora['nim']) ? $mahasiswa_bumigora['nim'] : '';
?>
<div class="admin-box">
    <h3>Mahasiswa Bumigora</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('mahasiswa_bumigora_npm') ? 'error' : ''; ?>">
            <?php echo form_label('Npm', 'mahasiswa_bumigora_npm', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_bumigora_npm" type="text" name="mahasiswa_bumigora_npm" maxlength="23" value="<?php echo set_value('mahasiswa_bumigora_npm', isset($mahasiswa_bumigora['npm']) ? $mahasiswa_bumigora['npm'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_bumigora_npm'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_bumigora_nomor_pendaftaran') ? 'error' : ''; ?>">
            <?php echo form_label('Nomor Pendaftaran', 'mahasiswa_bumigora_nomor_pendaftaran', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_bumigora_nomor_pendaftaran" type="text" name="mahasiswa_bumigora_nomor_pendaftaran" maxlength="12" value="<?php echo set_value('mahasiswa_bumigora_nomor_pendaftaran', isset($mahasiswa_bumigora['nomor_pendaftaran']) ? $mahasiswa_bumigora['nomor_pendaftaran'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_bumigora_nomor_pendaftaran'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_bumigora_nomor_pendaftaran_ulang') ? 'error' : ''; ?>">
            <?php echo form_label('Nomor Pendaftaran Ulang', 'mahasiswa_bumigora_nomor_pendaftaran_ulang', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_bumigora_nomor_pendaftaran_ulang" type="text" name="mahasiswa_bumigora_nomor_pendaftaran_ulang" maxlength="12" value="<?php echo set_value('mahasiswa_bumigora_nomor_pendaftaran_ulang', isset($mahasiswa_bumigora['nomor_pendaftaran_ulang']) ? $mahasiswa_bumigora['nomor_pendaftaran_ulang'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_bumigora_nomor_pendaftaran_ulang'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_bumigora_nama_mahasiswa') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Mahasiswa', 'mahasiswa_bumigora_nama_mahasiswa', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_bumigora_nama_mahasiswa" type="text" name="mahasiswa_bumigora_nama_mahasiswa" maxlength="125" value="<?php echo set_value('mahasiswa_bumigora_nama_mahasiswa', isset($mahasiswa_bumigora['nama_mahasiswa']) ? $mahasiswa_bumigora['nama_mahasiswa'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_bumigora_nama_mahasiswa'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_bumigora_tempat_lahir') ? 'error' : ''; ?>">
            <?php echo form_label('Tempat Lahir', 'mahasiswa_bumigora_tempat_lahir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_bumigora_tempat_lahir" type="text" name="mahasiswa_bumigora_tempat_lahir" maxlength="50" value="<?php echo set_value('mahasiswa_bumigora_tempat_lahir', isset($mahasiswa_bumigora['tempat_lahir']) ? $mahasiswa_bumigora['tempat_lahir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_bumigora_tempat_lahir'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_bumigora_tanggal_lahir') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Lahir', 'mahasiswa_bumigora_tanggal_lahir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_bumigora_tanggal_lahir" type="text" name="mahasiswa_bumigora_tanggal_lahir" maxlength="50" value="<?php echo set_value('mahasiswa_bumigora_tanggal_lahir', isset($mahasiswa_bumigora['tanggal_lahir']) ? $mahasiswa_bumigora['tanggal_lahir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_bumigora_tanggal_lahir'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_bumigora_alamat') ? 'error' : ''; ?>">
            <?php echo form_label('Alamat', 'mahasiswa_bumigora_alamat', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_bumigora_alamat" type="text" name="mahasiswa_bumigora_alamat" maxlength="75" value="<?php echo set_value('mahasiswa_bumigora_alamat', isset($mahasiswa_bumigora['alamat']) ? $mahasiswa_bumigora['alamat'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_bumigora_alamat'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_bumigora_kota') ? 'error' : ''; ?>">
            <?php echo form_label('Kota', 'mahasiswa_bumigora_kota', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_bumigora_kota" type="text" name="mahasiswa_bumigora_kota" maxlength="50" value="<?php echo set_value('mahasiswa_bumigora_kota', isset($mahasiswa_bumigora['kota']) ? $mahasiswa_bumigora['kota'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_bumigora_kota'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Mahasiswa Bumigora" />
            or <?php echo anchor(SITE_AREA .'/mahasiswa/mahasiswa_bumigora', lang('mahasiswa_bumigora_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Mahasiswa_Bumigora.Mahasiswa.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('mahasiswa_bumigora_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('mahasiswa_bumigora_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
