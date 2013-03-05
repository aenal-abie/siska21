
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($tahun_akademik) ) {
    $tahun_akademik = (array)$tahun_akademik;
}
$id = isset($tahun_akademik['kode_tahun_akademik']) ? $tahun_akademik['kode_tahun_akademik'] : '';
?>
<div class="admin-box">
    <h3>Tahun Akademik</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('tahun_akademik_tahun_akademik') ? 'error' : ''; ?>">
            <?php echo form_label('Tahun Akademik', 'tahun_akademik_tahun_akademik', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="tahun_akademik_tahun_akademik" type="text" name="tahun_akademik_tahun_akademik" maxlength="9" value="<?php echo set_value('tahun_akademik_tahun_akademik', isset($tahun_akademik['tahun_akademik']) ? $tahun_akademik['tahun_akademik'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('tahun_akademik_tahun_akademik'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                ''1' => ''1',
                '0'' => '0'',
); ?>

        <?php echo form_dropdown('tahun_akademik_semester', $options, set_value('tahun_akademik_semester', isset($tahun_akademik['tahun_akademik_semester']) ? $tahun_akademik['tahun_akademik_semester'] : ''), 'Semester')?>        <div class="control-group <?php echo form_error('tahun_akademik_tanggal_mulai') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Mulai'. lang('bf_form_label_required'), 'tahun_akademik_tanggal_mulai', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="tahun_akademik_tanggal_mulai" type="text" name="tahun_akademik_tanggal_mulai"  value="<?php echo set_value('tahun_akademik_tanggal_mulai', isset($tahun_akademik['tanggal_mulai']) ? $tahun_akademik['tanggal_mulai'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('tahun_akademik_tanggal_mulai'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('tahun_akademik_tanggal_berakhir') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Berakhir'. lang('bf_form_label_required'), 'tahun_akademik_tanggal_berakhir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="tahun_akademik_tanggal_berakhir" type="text" name="tahun_akademik_tanggal_berakhir"  value="<?php echo set_value('tahun_akademik_tanggal_berakhir', isset($tahun_akademik['tanggal_berakhir']) ? $tahun_akademik['tanggal_berakhir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('tahun_akademik_tanggal_berakhir'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
                ''A' => ''A',
                'N'' => 'N'',
); ?>

        <?php echo form_dropdown('tahun_akademik_status', $options, set_value('tahun_akademik_status', isset($tahun_akademik['tahun_akademik_status']) ? $tahun_akademik['tahun_akademik_status'] : ''), 'Status'. lang('bf_form_label_required'))?>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Tahun Akademik" />
            or <?php echo anchor(SITE_AREA .'/jurusan/tahun_akademik', lang('tahun_akademik_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Tahun_Akademik.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('tahun_akademik_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('tahun_akademik_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
