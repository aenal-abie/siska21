<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($detail_kalender_akademik) ) {
    $detail_kalender_akademik = (array)$detail_kalender_akademik;
}
$id = isset($detail_kalender_akademik['kode_detail_kalender_akademik']) ? $detail_kalender_akademik['kode_detail_kalender_akademik'] : '';
?>
<div class="admin-box">
    <h3>Detail Kalender Akademik</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php // Change the values in this array to populate your dropdown as required ?>        
        <?php echo form_dropdown('detail_kalender_akademik_kode_kalender_akademik', $options, set_value('detail_kalender_akademik_kode_kalender_akademik', isset($detail_kalender_akademik['detail_kalender_akademik_kode_kalender_akademik']) ? $detail_kalender_akademik['detail_kalender_akademik_kode_kalender_akademik'] : ''), 'Kalender Akademik'. lang('bf_form_label_required'),'id="chosen" data-placeholder="Pilih  Kalender Akademik..."')?>        
        
        <div class="control-group <?php echo form_error('detail_kalender_akademik_tanggal_mulai') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Mulai'. lang('bf_form_label_required'), 'detail_kalender_akademik_tanggal_mulai', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="detail_kalender_akademik_tanggal_mulai" type="text" name="detail_kalender_akademik_tanggal_mulai" maxlength="100" value="<?php echo set_value('detail_kalender_akademik_tanggal_mulai', isset($detail_kalender_akademik['tanggal_mulai']) ? $detail_kalender_akademik['tanggal_mulai'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('detail_kalender_akademik_tanggal_mulai'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('detail_kalender_akademik_tanggal_berakhir') ? 'error' : ''; ?>">
            <?php echo form_label('Tanggal Berakhir'. lang('bf_form_label_required'), 'detail_kalender_akademik_tanggal_berakhir', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="detail_kalender_akademik_tanggal_berakhir" type="text" name="detail_kalender_akademik_tanggal_berakhir" maxlength="100" value="<?php echo set_value('detail_kalender_akademik_tanggal_berakhir', isset($detail_kalender_akademik['tanggal_berakhir']) ? $detail_kalender_akademik['tanggal_berakhir'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('detail_kalender_akademik_tanggal_berakhir'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Detail Kalender Akademik" />
            or <?php echo anchor(SITE_AREA .'/jurusan/detail_kalender_akademik', lang('detail_kalender_akademik_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
 <script src="<?php echo base_url() ?>assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript"> $("#chosen").chosen({allow_single_deselect: true});  </script>
