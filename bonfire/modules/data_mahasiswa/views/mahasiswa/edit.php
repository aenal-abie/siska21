
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($data_mahasiswa) ) {
    $data_mahasiswa = (array)$data_mahasiswa;
}
$id = isset($data_mahasiswa['nim']) ? $data_mahasiswa['nim'] : '';
?>
<div class="admin-box">
    <h3>Data Mahasiswa</h3>
<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('data_mahasiswa_nim') ? 'error' : ''; ?>">
            <?php echo form_label('Nim'. lang('bf_form_label_required'), 'data_mahasiswa_nim', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_nim" type="text" name="data_mahasiswa_nim" maxlength="10" value="<?php echo set_value('data_mahasiswa_nim', isset($data_mahasiswa['nim']) ? $data_mahasiswa['nim'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_nim'); ?></span>
        </div>
            	
        <div class="control-group <?php echo form_error('data_mahasiswa_npm') ? 'error' : ''; ?>">
            <?php echo form_label('Npm'. lang('bf_form_label_required'), 'data_mahasiswa_npm', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_npm" type="text" name="data_mahasiswa_npm" maxlength="23" value="<?php echo set_value('data_mahasiswa_npm', isset($data_mahasiswa['npm']) ? $data_mahasiswa['npm'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_npm'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_nomor_pendaftaran') ? 'error' : ''; ?>">
            <?php echo form_label('Nomor Pendaftaran'. lang('bf_form_label_required'), 'data_mahasiswa_nomor_pendaftaran', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_nomor_pendaftaran" type="text" name="data_mahasiswa_nomor_pendaftaran" maxlength="12" value="<?php echo set_value('data_mahasiswa_nomor_pendaftaran', isset($data_mahasiswa['nomor_pendaftaran']) ? $data_mahasiswa['nomor_pendaftaran'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_nomor_pendaftaran'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_nomor_pendaftaran_ulang') ? 'error' : ''; ?>">
            <?php echo form_label('Nomor Pendaftaran Ulang'. lang('bf_form_label_required'), 'data_mahasiswa_nomor_pendaftaran_ulang', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_nomor_pendaftaran_ulang" type="text" name="data_mahasiswa_nomor_pendaftaran_ulang" maxlength="12" value="<?php echo set_value('data_mahasiswa_nomor_pendaftaran_ulang', isset($data_mahasiswa['nomor_pendaftaran_ulang']) ? $data_mahasiswa['nomor_pendaftaran_ulang'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_nomor_pendaftaran_ulang'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_nama_mahasiswa') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Mahasiswa'. lang('bf_form_label_required'), 'data_mahasiswa_nama_mahasiswa', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_nama_mahasiswa" type="text" name="data_mahasiswa_nama_mahasiswa" maxlength="125" value="<?php echo set_value('data_mahasiswa_nama_mahasiswa', isset($data_mahasiswa['nama_mahasiswa']) ? $data_mahasiswa['nama_mahasiswa'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_nama_mahasiswa'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_tempat_lahir') ? 'error' : ''; ?>">
            <?php echo form_label('Tempat Lahir'. lang('bf_form_label_required'), 'data_mahasiswa_tempat_lahir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_tempat_lahir" type="text" name="data_mahasiswa_tempat_lahir" maxlength="50" value="<?php echo set_value('data_mahasiswa_tempat_lahir', isset($data_mahasiswa['tempat_lahir']) ? $data_mahasiswa['tempat_lahir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_tempat_lahir'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_tanggal_lahir') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Lahir'. lang('bf_form_label_required'), 'data_mahasiswa_tanggal_lahir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_tanggal_lahir" type="text" name="data_mahasiswa_tanggal_lahir" maxlength="50" value="<?php echo set_value('data_mahasiswa_tanggal_lahir', isset($data_mahasiswa['tanggal_lahir']) ? $data_mahasiswa['tanggal_lahir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_tanggal_lahir'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_alamat') ? 'error' : ''; ?>">
            <?php echo form_label('Alamat', 'data_mahasiswa_alamat', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_alamat" type="text" name="data_mahasiswa_alamat" maxlength="75" value="<?php echo set_value('data_mahasiswa_alamat', isset($data_mahasiswa['alamat']) ? $data_mahasiswa['alamat'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_alamat'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_kota') ? 'error' : ''; ?>">
            <?php echo form_label('Kota'. lang('bf_form_label_required'), 'data_mahasiswa_kota', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_kota" type="text" name="data_mahasiswa_kota" maxlength="50" value="<?php echo set_value('data_mahasiswa_kota', isset($data_mahasiswa['kota']) ? $data_mahasiswa['kota'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_kota'); ?></span>
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

        <?php echo form_dropdown('data_mahasiswa_propinsi', $options, set_value('data_mahasiswa_propinsi', isset($data_mahasiswa['propinsi']) ? $data_mahasiswa['propinsi'] : ''), 'Propinsi'. lang('bf_form_label_required'))?>
        <div class="control-group <?php echo form_error('data_mahasiswa_telepon') ? 'error' : ''; ?>">
            <?php echo form_label('Telepon'. lang('bf_form_label_required'), 'data_mahasiswa_telepon', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_telepon" type="text" name="data_mahasiswa_telepon" maxlength="20" value="<?php echo set_value('data_mahasiswa_telepon', isset($data_mahasiswa['telepon']) ? $data_mahasiswa['telepon'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_telepon'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'L' => 'L',
                'P' => 'P',
); ?>

        <?php echo form_dropdown('data_mahasiswa_jenis_kelamin', $options, set_value('data_mahasiswa_jenis_kelamin', isset($data_mahasiswa['jenis_kelamin']) ? $data_mahasiswa['jenis_kelamin'] : ''), 'Jenis Kelamin'. lang('bf_form_label_required'))?>

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

        <?php echo form_dropdown('data_mahasiswa_agama', $options, set_value('data_mahasiswa_agama', isset($data_mahasiswa['agama']) ? $data_mahasiswa['agama'] : ''), 'Agama'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'O' => 'O',
                'A' => 'A',
                'AB' => 'AB',
                'B' => 'B',
                '-' => '-',
); ?>

        <?php echo form_dropdown('data_mahasiswa_golongan_darah', $options, set_value('data_mahasiswa_golongan_darah', isset($data_mahasiswa['golongan_darah']) ? $data_mahasiswa['golongan_darah'] : ''), 'Golongan Darah'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'WNI' => 'WNI',
                'WNA' => 'WNA',
); ?>

        <?php echo form_dropdown('data_mahasiswa_kewarganegaraan', $options, set_value('data_mahasiswa_kewarganegaraan', isset($data_mahasiswa['kewarganegaraan']) ? $data_mahasiswa['kewarganegaraan'] : ''), 'Kewarganegaraan'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('data_mahasiswa_nama_instansi') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Instansi', 'data_mahasiswa_nama_instansi', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_nama_instansi" type="text" name="data_mahasiswa_nama_instansi" maxlength="75" value="<?php echo set_value('data_mahasiswa_nama_instansi', isset($data_mahasiswa['nama_instansi']) ? $data_mahasiswa['nama_instansi'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_nama_instansi'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_email') ? 'error' : ''; ?>">
            <?php echo form_label('Email'. lang('bf_form_label_required'), 'data_mahasiswa_email', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_email" type="text" name="data_mahasiswa_email" maxlength="75" value="<?php echo set_value('data_mahasiswa_email', isset($data_mahasiswa['email']) ? $data_mahasiswa['email'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_email'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_nama_ayah') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Ayah'. lang('bf_form_label_required'), 'data_mahasiswa_nama_ayah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_nama_ayah" type="text" name="data_mahasiswa_nama_ayah" maxlength="50" value="<?php echo set_value('data_mahasiswa_nama_ayah', isset($data_mahasiswa['nama_ayah']) ? $data_mahasiswa['nama_ayah'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_nama_ayah'); ?></span>
        </div>


        </div>


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

        <?php echo form_dropdown('data_mahasiswa_agama_ayah', $options, set_value('data_mahasiswa_agama_ayah', isset($data_mahasiswa['agama_ayah']) ? $data_mahasiswa['agama_ayah'] : ''), 'Agama Ayah'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'Pegawai Negeri Sipil' => 'Pegawai Negeri Sipil',
                'Pegawai Swasta' => 'Pegawai Swasta',
                'Wiraswasta' => 'Wiraswasta',
                'TNI/Polri' => 'TNI/Polri',
                'Dosen' => 'Dosen',
                'Guru' => 'Guru',
                'Petani' => 'Petani',
                'Rumah Tangga' => 'Rumah Tangga',
                'Lainnya' => 'Lainnya',
); ?>

        <?php echo form_dropdown('data_mahasiswa_pekerjaan_ayah', $options, set_value('data_mahasiswa_pekerjaan_ayah', isset($data_mahasiswa['pekerjaan_ayah']) ? $data_mahasiswa['pekerjaan_ayah'] : ''), 'Pekerjaan Ayah'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('data_mahasiswa_nama_ibu') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Ibu'. lang('bf_form_label_required'), 'data_mahasiswa_nama_ibu', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_nama_ibu" type="text" name="data_mahasiswa_nama_ibu" maxlength="50" value="<?php echo set_value('data_mahasiswa_nama_ibu', isset($data_mahasiswa['nama_ibu']) ? $data_mahasiswa['nama_ibu'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_nama_ibu'); ?></span>
        </div>


        </div>


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

        <?php echo form_dropdown('data_mahasiswa_agama_ibu', $options, set_value('data_mahasiswa_agama_ibu', isset($data_mahasiswa['agama_ibu']) ? $data_mahasiswa['agama_ibu'] : ''), 'Agama Ibu'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'Pegawai Negeri Sipil' => 'Pegawai Negeri Sipil',
                'Pegawai Swasta' => 'Pegawai Swasta',
                'Wiraswasta' => 'Wiraswasta',
                'TNI/Polri' => 'TNI/Polri',
                'Dosen' => 'Dosen',
                'Guru' => 'Guru',
                'Petani' => 'Petani',
                'Rumah Tangga' => 'Rumah Tangga',
                'Lainnya' => 'Lainnya',
); ?>

        <?php echo form_dropdown('data_mahasiswa_pekerjaan_ibu', $options, set_value('data_mahasiswa_pekerjaan_ibu', isset($data_mahasiswa['pekerjaan_ibu']) ? $data_mahasiswa['pekerjaan_ibu'] : ''), 'Pekerjaan Ibu'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('data_mahasiswa_alamat_orangtua') ? 'error' : ''; ?>">
            <?php echo form_label('Alamat Orangtua'. lang('bf_form_label_required'), 'data_mahasiswa_alamat_orangtua', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_alamat_orangtua" type="text" name="data_mahasiswa_alamat_orangtua" maxlength="75" value="<?php echo set_value('data_mahasiswa_alamat_orangtua', isset($data_mahasiswa['alamat_orangtua']) ? $data_mahasiswa['alamat_orangtua'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_alamat_orangtua'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_kota_orangtua') ? 'error' : ''; ?>">
            <?php echo form_label('Kota Orangtua'. lang('bf_form_label_required'), 'data_mahasiswa_kota_orangtua', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_kota_orangtua" type="text" name="data_mahasiswa_kota_orangtua" maxlength="50" value="<?php echo set_value('data_mahasiswa_kota_orangtua', isset($data_mahasiswa['kota_orangtua']) ? $data_mahasiswa['kota_orangtua'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_kota_orangtua'); ?></span>
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

        <?php echo form_dropdown('data_mahasiswa_propinsi_orangtua', $options, set_value('data_mahasiswa_propinsi_orangtua', isset($data_mahasiswa['propinsi_orangtua']) ? $data_mahasiswa['propinsi_orangtua'] : ''), 'Propinsi Orangtua'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('data_mahasiswa_telepon_orangtua') ? 'error' : ''; ?>">
            <?php echo form_label('Telepon Orangtua', 'data_mahasiswa_telepon_orangtua', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_telepon_orangtua" type="text" name="data_mahasiswa_telepon_orangtua" maxlength="20" value="<?php echo set_value('data_mahasiswa_telepon_orangtua', isset($data_mahasiswa['telepon_orangtua']) ? $data_mahasiswa['telepon_orangtua'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_telepon_orangtua'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_foto') ? 'error' : ''; ?>">
            <?php echo form_label('Foto', 'data_mahasiswa_foto', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_foto" type="file" name="data_mahasiswa_foto" maxlength="16" value="<?php echo set_value('data_mahasiswa_foto', isset($data_mahasiswa['foto']) ? $data_mahasiswa['foto'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_foto'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_mahasiswa_sandi') ? 'error' : ''; ?>">
            <?php echo form_label('Sandi'. lang('bf_form_label_required'), 'data_mahasiswa_sandi', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_sandi" type="password" name="data_mahasiswa_sandi" maxlength="255"  />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_sandi'); ?></span>
        </div>
        
        <div class="control-group <?php echo form_error('data_mahasiswa_ulangi_sandi') ? 'error' : ''; ?>">
            <?php echo form_label('Ulangi Sandi'. lang('bf_form_label_required'), 'data_mahasiswa_ulangi_sandi', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_mahasiswa_ulangi_sandi" type="password" name="data_mahasiswa_ulangi_sandi" maxlength="255" />
        <span class="help-inline"><?php echo form_error('data_mahasiswa_ulangi_sandi'); ?></span>
        </div>        


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
								'' => '...',
                'A' => 'A',
                'N' => 'N',
); ?>

        <?php echo form_dropdown('data_mahasiswa_status', $options, set_value('data_mahasiswa_status', isset($data_mahasiswa['status']) ? $data_mahasiswa['status'] : ''), 'Status'. lang('bf_form_label_required'))?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Data Mahasiswa" />
            or <?php echo anchor(SITE_AREA .'/mahasiswa/data_mahasiswa', lang('data_mahasiswa_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Data_Mahasiswa.Mahasiswa.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('data_mahasiswa_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('data_mahasiswa_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
