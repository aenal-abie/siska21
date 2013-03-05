
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($data_dosen) ) {
    $data_dosen = (array)$data_dosen;
}
$id = isset($data_dosen['kode_dosen']) ? $data_dosen['kode_dosen'] : '';
?>
<div class="admin-box">
    <h3>Data Dosen</h3>
<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('data_dosen_nik') ? 'error' : ''; ?>">
            <?php echo form_label('Nik', 'data_dosen_nik', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_nik" type="text" name="data_dosen_nik" maxlength="20" value="<?php echo set_value('data_dosen_nik', isset($data_dosen['nik']) ? $data_dosen['nik'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_nik'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_nidn') ? 'error' : ''; ?>">
            <?php echo form_label('Nidn', 'data_dosen_nidn', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_nidn" type="text" name="data_dosen_nidn" maxlength="20" value="<?php echo set_value('data_dosen_nidn', isset($data_dosen['nidn']) ? $data_dosen['nidn'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_nidn'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_nama_dosen') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Dosen'. lang('bf_form_label_required'), 'data_dosen_nama_dosen', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_nama_dosen" type="text" name="data_dosen_nama_dosen" maxlength="75" value="<?php echo set_value('data_dosen_nama_dosen', isset($data_dosen['nama_dosen']) ? $data_dosen['nama_dosen'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_nama_dosen'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_tempat_lahir') ? 'error' : ''; ?>">
            <?php echo form_label('Tempat Lahir'. lang('bf_form_label_required'), 'data_dosen_tempat_lahir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_tempat_lahir" type="text" name="data_dosen_tempat_lahir" maxlength="75" value="<?php echo set_value('data_dosen_tempat_lahir', isset($data_dosen['tempat_lahir']) ? $data_dosen['tempat_lahir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_tempat_lahir'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_tanggal_lahir') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Lahir'. lang('bf_form_label_required'), 'data_dosen_tanggal_lahir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_tanggal_lahir" type="text" name="data_dosen_tanggal_lahir" maxlength="75" value="<?php echo set_value('data_dosen_tanggal_lahir', isset($data_dosen['tanggal_lahir']) ? $data_dosen['tanggal_lahir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_tanggal_lahir'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'L' => 'L',
                'P' => 'P',
); ?>

        <?php echo form_dropdown('data_dosen_jenis_kelamin', $options, set_value('data_dosen_jenis_kelamin', isset($data_dosen['jenis_kelamin']) ? $data_dosen['jenis_kelamin'] : ''), 'Jenis Kelamin'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'Islam' => 'Islam',
                'Hindu' => 'Hindu',
                'Kristen' => 'Kristen',
                'Katolik' => 'Katolik',
                'Budha' => 'Budha',
                'Konghucu' => 'Konghucu',
); ?>

        <?php echo form_dropdown('data_dosen_agama', $options, set_value('data_dosen_agama', isset($data_dosen['agama']) ? $data_dosen['agama'] : ''), 'Agama'. lang('bf_form_label_required'))?>
        <div class="control-group <?php echo form_error('data_dosen_alamat') ? 'error' : ''; ?>">
            <?php echo form_label('Alamat'. lang('bf_form_label_required'), 'data_dosen_alamat', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_alamat" type="text" name="data_dosen_alamat" maxlength="75" value="<?php echo set_value('data_dosen_alamat', isset($data_dosen['alamat']) ? $data_dosen['alamat'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_alamat'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_kota') ? 'error' : ''; ?>">
            <?php echo form_label('Kota'. lang('bf_form_label_required'), 'data_dosen_kota', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_kota" type="text" name="data_dosen_kota" maxlength="50" value="<?php echo set_value('data_dosen_kota', isset($data_dosen['kota']) ? $data_dosen['kota'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_kota'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'Aceh' => 'Aceh',
                'Sumatera Utara' => 'Sumatera Utara',
                'Sumatera Barat' => 'Sumatera Barat',
                'Riau' => 'Riau',
                'Jambi' => 'Jambi',
                'Sumatera Selatan' => 'Sumatera Selatan',
                'Bengkulu' => 'Bengkulu',
                'Lampung' => 'Lampung',
                'Kepulauan Bangka Belitung' => 'Kepulauan Bangka Belitung',
                'Kepulauan Riau' => 'Kepulauan Riau',
                'Daerah Khusus Ibukota Jakarta' => 'Daerah Khusus Ibukota Jakarta',
                'Jawa Barat' => 'Jawa Barat',
                'Jawa Tengah' => 'Jawa Tengah',
                'Daerah Istimewa Yogyakarta' => 'Daerah Istimewa Yogyakarta',
                'Jawa Timur' => 'Jawa Timur',
                'Banten' => 'Banten',
                'Bali' => 'Bali',
                'Nusa Tenggara Barat' => 'Nusa Tenggara Barat',
                'Nusa Tenggara Timur' => 'Nusa Tenggara Timur',
                'Kalimantan Barat' => 'Kalimantan Barat',
                'Kalimantan Tengah' => 'Kalimantan Tengah',
                'Kalimantan Selatan' => 'Kalimantan Selatan',
                'Kalimantan Timur' => 'Kalimantan Timur',
                'Sulawesi Utara' => 'Sulawesi Utara',
                'Sulawesi Tengah' => 'Sulawesi Tengah',
                'Sulawesi Selatan' => 'Sulawesi Selatan',
                'Sulawesi Tenggara' => 'Sulawesi Tenggara',
                'Gorontalo' => 'Gorontalo',
                'Sulawesi Barat' => 'Sulawesi Barat',
                'Maluku' => 'Maluku',
                'Maluku Utara' => 'Maluku Utara',
                'Papua Barat' => 'Papua Barat',
                'Papua' => 'Papua',
); ?>

        <?php echo form_dropdown('data_dosen_propinsi', $options, set_value('data_dosen_propinsi', isset($data_dosen['propinsi']) ? $data_dosen['propinsi'] : ''), 'Propinsi'. lang('bf_form_label_required'))?>
        <div class="control-group <?php echo form_error('data_dosen_kodepos') ? 'error' : ''; ?>">
            <?php echo form_label('Kodepos', 'data_dosen_kodepos', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_kodepos" type="text" name="data_dosen_kodepos" maxlength="5" value="<?php echo set_value('data_dosen_kodepos', isset($data_dosen['kodepos']) ? $data_dosen['kodepos'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_kodepos'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_telepon') ? 'error' : ''; ?>">
            <?php echo form_label('Telepon'. lang('bf_form_label_required'), 'data_dosen_telepon', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_telepon" type="text" name="data_dosen_telepon" maxlength="20" value="<?php echo set_value('data_dosen_telepon', isset($data_dosen['telepon']) ? $data_dosen['telepon'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_telepon'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_email') ? 'error' : ''; ?>">
            <?php echo form_label('Email'. lang('bf_form_label_required'), 'data_dosen_email', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_email" type="text" name="data_dosen_email" maxlength="75" value="<?php echo set_value('data_dosen_email', isset($data_dosen['email']) ? $data_dosen['email'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_email'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_website') ? 'error' : ''; ?>">
            <?php echo form_label('Website', 'data_dosen_website', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_website" type="text" name="data_dosen_website" maxlength="75" value="<?php echo set_value('data_dosen_website', isset($data_dosen['website']) ? $data_dosen['website'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_website'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_kepakaran') ? 'error' : ''; ?>">
            <?php echo form_label('Kepakaran', 'data_dosen_kepakaran', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_kepakaran" type="text" name="data_dosen_kepakaran" maxlength="255" value="<?php echo set_value('data_dosen_kepakaran', isset($data_dosen['kepakaran']) ? $data_dosen['kepakaran'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_kepakaran'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_peminatan') ? 'error' : ''; ?>">
            <?php echo form_label('Peminatan', 'data_dosen_peminatan', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_peminatan" type="text" name="data_dosen_peminatan" maxlength="255" value="<?php echo set_value('data_dosen_peminatan', isset($data_dosen['peminatan']) ? $data_dosen['peminatan'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_peminatan'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_dosen_foto') ? 'error' : ''; ?>">
            <?php echo form_label('Foto', 'data_dosen_foto', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_dosen_foto" type="file" name="data_dosen_foto" maxlength="20" value="<?php echo set_value('data_dosen_foto', isset($data_dosen['foto']) ? $data_dosen['foto'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_dosen_foto'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'Tetap' => 'Tetap',
                'Luar' => 'Luar',
); ?>

        <?php echo form_dropdown('data_dosen_status', $options, set_value('data_dosen_status', isset($data_dosen['status']) ? $data_dosen['status'] : ''), 'Status'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'A' => 'A',
                'N' => 'N',
); ?>

        <?php echo form_dropdown('data_dosen_status_perwalian', $options, set_value('data_dosen_status_perwalian', isset($data_dosen['status_perwalian']) ? $data_dosen['status_perwalian'] : ''), 'Status Perwalian'. lang('bf_form_label_required'))?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Data Dosen" />
            or <?php echo anchor(SITE_AREA .'/dosen/data_dosen', lang('data_dosen_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Data_Dosen.Dosen.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('data_dosen_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('data_dosen_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
