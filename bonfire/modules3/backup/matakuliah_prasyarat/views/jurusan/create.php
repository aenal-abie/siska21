
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($matakuliah_prasyarat) ) {
    $matakuliah_prasyarat = (array)$matakuliah_prasyarat;
}
$id = isset($matakuliah_prasyarat['kode_matakuliah_prasyarat']) ? $matakuliah_prasyarat['kode_matakuliah_prasyarat'] : '';
?>
<div class="admin-box">
    <h3>Matakuliah Prasyarat</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                1 => 1,
); ?>

        <?php echo form_dropdown('kode_nama_kurikulum', $options, set_value('kode_nama_kurikulum', isset($matakuliah_prasyarat['kode_nama_kurikulum']) ? $matakuliah_prasyarat['kode_nama_kurikulum'] : ''), 'Kode Nama Kurikulum'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('matakuliah_yg_diambil') ? 'error' : ''; ?>">
            <?php echo form_label('Matakuliah Yg Diambil', 'matakuliah_yg_diambil', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_yg_diambil" type="text" name="matakuliah_yg_diambil" maxlength="10" value="<?php echo set_value('matakuliah_yg_diambil', isset($matakuliah_prasyarat['matakuliah_yg_diambil']) ? $matakuliah_prasyarat['matakuliah_yg_diambil'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_yg_diambil'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_prasyarat') ? 'error' : ''; ?>">
            <?php echo form_label('Matakuliah Prasyarat', 'matakuliah_prasyarat', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_prasyarat" type="text" name="matakuliah_prasyarat" maxlength="10" value="<?php echo set_value('matakuliah_prasyarat', isset($matakuliah_prasyarat['matakuliah_prasyarat']) ? $matakuliah_prasyarat['matakuliah_prasyarat'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_prasyarat'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Matakuliah Prasyarat" />
            or <?php echo anchor(SITE_AREA .'/jurusan/matakuliah_prasyarat', lang('matakuliah_prasyarat_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
