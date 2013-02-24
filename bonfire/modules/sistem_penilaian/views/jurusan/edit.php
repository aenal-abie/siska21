
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($sistem_penilaian) ) {
    $sistem_penilaian = (array)$sistem_penilaian;
}
$id = isset($sistem_penilaian['kode_sistem_penilaian']) ? $sistem_penilaian['kode_sistem_penilaian'] : '';
?>
<div class="admin-box">
    <h3>Sistem Penilaian</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('sistem_penilaian_nilai_minimum') ? 'error' : ''; ?>">
            <?php echo form_label('Nilai Minimum'. lang('bf_form_label_required'), 'sistem_penilaian_nilai_minimum', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="sistem_penilaian_nilai_minimum" type="text" name="sistem_penilaian_nilai_minimum" maxlength="5" value="<?php echo set_value('sistem_penilaian_nilai_minimum', isset($sistem_penilaian['nilai_minimum']) ? $sistem_penilaian['nilai_minimum'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('sistem_penilaian_nilai_minimum'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('sistem_penilaian_nilai_maksimum') ? 'error' : ''; ?>">
            <?php echo form_label('Nilai Maksimum'. lang('bf_form_label_required'), 'sistem_penilaian_nilai_maksimum', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="sistem_penilaian_nilai_maksimum" type="text" name="sistem_penilaian_nilai_maksimum" maxlength="5" value="<?php echo set_value('sistem_penilaian_nilai_maksimum', isset($sistem_penilaian['nilai_maksimum']) ? $sistem_penilaian['nilai_maksimum'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('sistem_penilaian_nilai_maksimum'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('sistem_penilaian_grade') ? 'error' : ''; ?>">
            <?php echo form_label('Grade'. lang('bf_form_label_required'), 'sistem_penilaian_grade', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="sistem_penilaian_grade" type="text" name="sistem_penilaian_grade" maxlength="2" value="<?php echo set_value('sistem_penilaian_grade', isset($sistem_penilaian['grade']) ? $sistem_penilaian['grade'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('sistem_penilaian_grade'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('sistem_penilaian_bobot_nilai') ? 'error' : ''; ?>">
            <?php echo form_label('Bobot Nilai'. lang('bf_form_label_required'), 'sistem_penilaian_bobot_nilai', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="sistem_penilaian_bobot_nilai" type="text" name="sistem_penilaian_bobot_nilai" maxlength="3" value="<?php echo set_value('sistem_penilaian_bobot_nilai', isset($sistem_penilaian['bobot_nilai']) ? $sistem_penilaian['bobot_nilai'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('sistem_penilaian_bobot_nilai'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                'Sempurna' => 'Sempurna',
                'Baik' => 'Baik',
                'Cukup' => 'Cukup',
                'Kurang' => 'Kurang'
); ?>

        <?php echo form_dropdown('sistem_penilaian_kategori', $options, set_value('sistem_penilaian_kategori', isset($sistem_penilaian['sistem_penilaian_kategori']) ? $sistem_penilaian['sistem_penilaian_kategori'] : ''), 'Kategori'. lang('bf_form_label_required'))?>

        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                'Lulus' => 'Lulus',
                'Tidak Lulus' => 'Tidak Lulus',
                'Gagal' => 'Gagal'
); ?>

        <?php echo form_dropdown('sistem_penilaian_keterangan', $options, set_value('sistem_penilaian_keterangan', isset($sistem_penilaian['sistem_penilaian_keterangan']) ? $sistem_penilaian['sistem_penilaian_keterangan'] : ''), 'Keterangan'. lang('bf_form_label_required'))?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Sistem Penilaian" />
            or <?php echo anchor(SITE_AREA .'/jurusan/sistem_penilaian', lang('sistem_penilaian_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Sistem_Penilaian.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('sistem_penilaian_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('sistem_penilaian_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
