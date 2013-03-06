<link rel="stylesheet" href="<?php echo css_path(); ?>jquery/jquery-ui-1.9.2.custom.min.css">
<script src="<?php echo js_path(); ?>jquery-ui-1.9.2.custom.min.js"></script>
    <meta charset="UTF-8">        
    <style>
		.ui-autocomplete { position: absolute; cursor: default; }	
        .ui-autocomplete-loading { background: white url('<?php echo base_url(); ?>assets/images/ui-anim_basic_16x16.gif') right center no-repeat; }
    </style>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />

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

<?php  $kosong_ta = array(
                '' => 'Tidak Ada data Tahun Akademik',
); ?>

        <?php echo form_dropdown('data_penjadwalan_kode_tahun_akademik', isset($option_ta)?$option_ta:$kosong_ta, set_value('data_penjadwalan_kode_tahun_akademik',$ta_aktif), 'Kode Tahun Akademik'. lang('bf_form_label_required'),'class="chzn-select" data-placeholder="Pilih Tahun Akademik"')?>        
        
        <?php 
            $jenjang = array('S'=>'S1','D'=>'D3');
        ?>
        
        <?php echo form_dropdown('data_penjadwalan_jenjang',$jenjang,'S','Jenjang','class="chzn-select" id="jenjang" data-placeholder="Pilih Jenjang"' )?>        
        
        <input id="url_ma" type="hidden" value="<?php echo base_url().SITE_AREA; ?>/penjadwalan/data_penjadwalan/lookup_mk/"  />
        <input id="url_dosen" type="hidden" value="<?php echo base_url().SITE_AREA; ?>/penjadwalan/data_penjadwalan/lookup_dosen/"  />
        
        <div class="control-group <?php echo form_error('data_penjadwalan_kode_matakuliah') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Matakuliah'. lang('bf_form_label_required'), 'data_penjadwalan_kode_matakuliah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_penjadwalan_kode_matakuliah" type="text" name="data_penjadwalan_kode_matakuliah" maxlength="10" value="<?php echo set_value('data_penjadwalan_kode_matakuliah', isset($data_penjadwalan['kode_matakuliah']) ? $data_penjadwalan['kode_matakuliah'] : ''); ?>"  />
        <input class="span5" disabled="" id="data_penjadwalan_nama_matakuliah" type="text" name="data_penjadwalan_nama_matakuliah" maxlength="10" value=""  />
        <span class="help-inline"><?php echo form_error('data_penjadwalan_kode_matakuliah'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_penjadwalan_kode_dosen') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Dosen'. lang('bf_form_label_required'), 'data_penjadwalan_kode_dosen', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input name="data_penjadwalan_kode_dosen" type="hidden" id="data_penjadwalan_kode_dosen" value="<?php echo set_value('data_penjadwalan_kode_dosen', isset($data_penjadwalan['kode_dosen']) ? $data_penjadwalan['kode_dosen'] : ''); ?>" />
        <input id="data_penjadwalan_nama_dosen" type="text" name="data_penjadwalan_nama_dosen" maxlength="2" value="<?php echo set_value('data_penjadwalan_kode_dosen'); ?>"   />
        <span class="help-inline"><?php echo form_error('data_penjadwalan_kode_dosen'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $ruang_kosong = array(
                '' => 'Data Ruangan Kosong',
); ?>

        <?php echo form_dropdown('data_penjadwalan_kode_ruang', $option_ruang, set_value('data_penjadwalan_kode_ruang', isset($data_penjadwalan['data_penjadwalan_kode_ruang']) ? $data_penjadwalan['data_penjadwalan_kode_ruang'] : ''), 'Kode Ruang'. lang('bf_form_label_required'),'id="cz"')?>        
        <div class="control-group <?php echo form_error('data_penjadwalan_kelompok') ? 'error' : ''; ?>">
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
                'R' => 'Reguler',
                'K' => 'KAS (Kuliah Antar Semester)',
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
<script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
