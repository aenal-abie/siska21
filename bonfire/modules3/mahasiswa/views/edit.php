
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($mahasiswa) ) {
    $mahasiswa = (array)$mahasiswa;
}
$id = isset($mahasiswa['nim']) ? $mahasiswa['nim'] : '';
?>
<div class="admin-box">
    <h3>Mahasiswa</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('mahasiswa_npm') ? 'error' : ''; ?>">
            <?php echo form_label('Npm', 'mahasiswa_npm', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_npm" type="text" name="mahasiswa_npm" maxlength="23" value="<?php echo set_value('mahasiswa_npm', isset($mahasiswa['npm']) ? $mahasiswa['npm'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_npm'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_nomor_pendaftaran') ? 'error' : ''; ?>">
            <?php echo form_label('Nomor Pendaftaran', 'mahasiswa_nomor_pendaftaran', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_nomor_pendaftaran" type="text" name="mahasiswa_nomor_pendaftaran" maxlength="12" value="<?php echo set_value('mahasiswa_nomor_pendaftaran', isset($mahasiswa['nomor_pendaftaran']) ? $mahasiswa['nomor_pendaftaran'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_nomor_pendaftaran'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_nomor_pendaftaran_ulang') ? 'error' : ''; ?>">
            <?php echo form_label('Nomor Pendaftaran Ulang', 'mahasiswa_nomor_pendaftaran_ulang', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_nomor_pendaftaran_ulang" type="text" name="mahasiswa_nomor_pendaftaran_ulang" maxlength="12" value="<?php echo set_value('mahasiswa_nomor_pendaftaran_ulang', isset($mahasiswa['nomor_pendaftaran_ulang']) ? $mahasiswa['nomor_pendaftaran_ulang'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_nomor_pendaftaran_ulang'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_nama_mahasiswa') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Mahasiswa', 'mahasiswa_nama_mahasiswa', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_nama_mahasiswa" type="text" name="mahasiswa_nama_mahasiswa" maxlength="125" value="<?php echo set_value('mahasiswa_nama_mahasiswa', isset($mahasiswa['nama_mahasiswa']) ? $mahasiswa['nama_mahasiswa'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_nama_mahasiswa'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_tempat_lahir') ? 'error' : ''; ?>">
            <?php echo form_label('Tempat Lahir', 'mahasiswa_tempat_lahir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_tempat_lahir" type="text" name="mahasiswa_tempat_lahir" maxlength="50" value="<?php echo set_value('mahasiswa_tempat_lahir', isset($mahasiswa['tempat_lahir']) ? $mahasiswa['tempat_lahir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_tempat_lahir'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('mahasiswa_tanggal_lahir') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Lahir', 'mahasiswa_tanggal_lahir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="mahasiswa_tanggal_lahir" type="text" name="mahasiswa_tanggal_lahir" maxlength="50" value="<?php echo set_value('mahasiswa_tanggal_lahir', isset($mahasiswa['tanggal_lahir']) ? $mahasiswa['tanggal_lahir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('mahasiswa_tanggal_lahir'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Mahasiswa" />
            or <?php echo anchor(SITE_AREA .'/mahasiswa/mahasiswa', lang('mahasiswa_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Mahasiswa.Mahasiswa.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('mahasiswa_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('mahasiswa_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
