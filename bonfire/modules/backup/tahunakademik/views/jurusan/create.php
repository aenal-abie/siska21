
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($tahunakademik) ) {
    $tahunakademik = (array)$tahunakademik;
}
$id = isset($tahunakademik['kode_tahun_akademik']) ? $tahunakademik['kode_tahun_akademik'] : '';
?>
<div class="admin-box">
    <h3>tahunakademik</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    
    <fieldset>
        <div class="control-group <?php echo form_error('tahunakademik_tahun_akademik') ? 'error' : ''; ?>">
            <?php echo form_label('Tahun Akademik'. lang('bf_form_label_required'), 'tahunakademik_tahun_akademik', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="tahunakademik_tahun_akademik" type="text" name="tahunakademik_tahun_akademik" maxlength="9" value="<?php echo set_value('tahunakademik_tahun_akademik', isset($tahunakademik['tahun_akademik']) ? $tahunakademik['tahun_akademik'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('tahunakademik_tahun_akademik'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('tahunakademik_semester') ? 'error' : ''; ?>">
            <?php echo form_label('Semester'. lang('bf_form_label_required'), 'tahunakademik_semester', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="tahunakademik_semester" name="tahunakademik_semester" type="radio" class="" value="1" <?php echo set_radio('tahunakademik_semester', '1', TRUE); ?> />
            <label for="tahunakademik_semester">Ganjil</label>
            <input id="tahunakademik_semester" name="tahunakademik_semester" type="radio" class="" value="0" <?php echo set_radio('tahunakademik_semester', '0'); ?> />
            <label for="tahunakademik_semester">Genap</label>
            <span class="help-inline"><?php echo form_error('tahunakademik_semester'); ?></span>
            </label>
        </div>



        </div>
        <div class="control-group <?php echo form_error('tahunakademik_tanggal_mulai') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Mulai'. lang('bf_form_label_required'), 'tahunakademik_tanggal_mulai', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="tahunakademik_tanggal_mulai" type="text" name="tahunakademik_tanggal_mulai"  value="<?php echo set_value('tahunakademik_tanggal_mulai', isset($tahunakademik['tanggal_mulai']) ? $tahunakademik['tanggal_mulai'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('tahunakademik_tanggal_mulai'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('tahunakademik_tanggal_berakhir') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Berakhir'. lang('bf_form_label_required'), 'tahunakademik_tanggal_berakhir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="tahunakademik_tanggal_berakhir" type="text" name="tahunakademik_tanggal_berakhir"  value="<?php echo set_value('tahunakademik_tanggal_berakhir', isset($tahunakademik['tanggal_berakhir']) ? $tahunakademik['tanggal_berakhir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('tahunakademik_tanggal_berakhir'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('tahunakademik_status') ? 'error' : ''; ?>">
            <?php echo form_label('Status'. lang('bf_form_label_required'), 'tahunakademik_status', array('class' => "control-label") ); ?>
            <div class='controls'>
        <label class="radio">
            <input id="tahunakademik_status" name="tahunakademik_status" type="radio" class="" value="A" <?php echo set_radio('tahunakademik_status', 'A', TRUE); ?> />
            <label for="tahunakademik_status">Aktik</label>
            <input id="tahunakademik_status" name="tahunakademik_status" type="radio" class="" value="N" <?php echo set_radio('tahunakademik_status', 'N'); ?> />
            <label for="tahunakademik_status">Tidak Aktif</label>
            <span class="help-inline"><?php echo form_error('tahunakademik_status'); ?></span>
            </label>
        </div>



        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Save" />
            or <?php echo anchor(SITE_AREA .'/jurusan/tahunakademik', lang('tahunakademik_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
