
<?php // Change the css classes to suit your needs
if( isset($predikatkelulusan) ) {
    $predikatkelulusan = (array)$predikatkelulusan;
}
$id = isset($predikatkelulusan['kode_predikat_kelulusan']) ? $predikatkelulusan['kode_predikat_kelulusan'] : '';
?>
<div class="admin-box">
    <h3>PredikatKelulusan</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('predikatkelulusan_nilai_minimum') ? 'error' : ''; ?>">
            <?php echo form_label('Nilai Minimum', 'predikatkelulusan_nilai_minimum', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="predikatkelulusan_nilai_minimum" type="text" name="predikatkelulusan_nilai_minimum" maxlength="5" value="<?php echo set_value('predikatkelulusan_nilai_minimum', isset($predikatkelulusan['nilai_minimum']) ? $predikatkelulusan['nilai_minimum'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('predikatkelulusan_nilai_minimum'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('predikatkelulusan_nilai_maksimum') ? 'error' : ''; ?>">
            <?php echo form_label('Nilai Maksimum', 'predikatkelulusan_nilai_maksimum', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="predikatkelulusan_nilai_maksimum" type="text" name="predikatkelulusan_nilai_maksimum" maxlength="5" value="<?php echo set_value('predikatkelulusan_nilai_maksimum', isset($predikatkelulusan['nilai_maksimum']) ? $predikatkelulusan['nilai_maksimum'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('predikatkelulusan_nilai_maksimum'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                'Lulus' => 'Lulus',
                'Tidak Lulus' => 'Tidak Lulus',
                'Gagal' => 'Gagal'
); ?>

        <?php echo form_dropdown('predikatkelulusan_keterangan', $options, set_value('predikatkelulusan_keterangan', isset($predikatkelulusan['keterangan']) ? $predikatkelulusan['keterangan'] : ''), 'Keterangan')?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit PredikatKelulusan" />
            or <?php echo anchor(SITE_AREA .'/jurusan/predikatkelulusan', lang('predikatkelulusan_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('PredikatKelulusan.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('predikatkelulusan_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('predikatkelulusan_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
