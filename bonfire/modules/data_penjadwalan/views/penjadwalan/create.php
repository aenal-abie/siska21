
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($data_penjadwalan) ) {
    $data_penjadwalan = (array)$data_penjadwalan;
}
$id = isset($data_penjadwalan['kode_penjadwalan']) ? $data_penjadwalan['kode_penjadwalan'] : '';
?>
<div class="admin-box">
    <h3>Data Penjadwalan</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                2 => 2,
); ?>

        <?php echo form_dropdown('data_penjadwalan_kode_tahun_akademik', $options, set_value('data_penjadwalan_kode_tahun_akademik', isset($data_penjadwalan['data_penjadwalan_kode_tahun_akademik']) ? $data_penjadwalan['data_penjadwalan_kode_tahun_akademik'] : ''), 'Kode Tahun Akademik'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('data_penjadwalan_kode_matakuliah') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Matakuliah'. lang('bf_form_label_required'), 'data_penjadwalan_kode_matakuliah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_penjadwalan_kode_matakuliah" type="text" name="data_penjadwalan_kode_matakuliah" maxlength="10" value="<?php echo set_value('data_penjadwalan_kode_matakuliah', isset($data_penjadwalan['kode_matakuliah']) ? $data_penjadwalan['kode_matakuliah'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_penjadwalan_kode_matakuliah'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_penjadwalan_kode_dosen') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Dosen'. lang('bf_form_label_required'), 'data_penjadwalan_kode_dosen', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_penjadwalan_kode_dosen" type="text" name="data_penjadwalan_kode_dosen" maxlength="2" value="<?php echo set_value('data_penjadwalan_kode_dosen', isset($data_penjadwalan['kode_dosen']) ? $data_penjadwalan['kode_dosen'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_penjadwalan_kode_dosen'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                2 => 2,
); ?>

        <?php echo form_dropdown('data_penjadwalan_kode_ruang', $options, set_value('data_penjadwalan_kode_ruang', isset($data_penjadwalan['data_penjadwalan_kode_ruang']) ? $data_penjadwalan['data_penjadwalan_kode_ruang'] : ''), 'Kode Ruang'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('data_penjadwalan_kelompok') ? 'error' : ''; ?>">
            <?php echo form_label('Kelompok'. lang('bf_form_label_required'), 'data_penjadwalan_kelompok', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_penjadwalan_kelompok" type="text" name="data_penjadwalan_kelompok" maxlength="2" value="<?php echo set_value('data_penjadwalan_kelompok', isset($data_penjadwalan['kelompok']) ? $data_penjadwalan['kelompok'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_penjadwalan_kelompok'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                2 => 2,
); ?>

        <?php echo form_dropdown('data_penjadwalan_jam_mulai', $options, set_value('data_penjadwalan_jam_mulai', isset($data_penjadwalan['data_penjadwalan_jam_mulai']) ? $data_penjadwalan['data_penjadwalan_jam_mulai'] : ''), 'Jam Mulai'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                2 => 2,
); ?>

        <?php echo form_dropdown('data_penjadwalan_jam_berakhir', $options, set_value('data_penjadwalan_jam_berakhir', isset($data_penjadwalan['data_penjadwalan_jam_berakhir']) ? $data_penjadwalan['data_penjadwalan_jam_berakhir'] : ''), 'Jam Berakhir'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                'R' => 'R',
                'K' => 'K',
); ?>

        <?php echo form_dropdown('data_penjadwalan_status_perkuliahan', $options, set_value('data_penjadwalan_status_perkuliahan', isset($data_penjadwalan['data_penjadwalan_status_perkuliahan']) ? $data_penjadwalan['data_penjadwalan_status_perkuliahan'] : ''), 'Status Perkuliahan'. lang('bf_form_label_required'))?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Data Penjadwalan" />
            or <?php echo anchor(SITE_AREA .'/penjadwalan/data_penjadwalan', lang('data_penjadwalan_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
