
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
        <?php echo form_dropdown('detail_kalender_akademik_kode_kalender_akademik', $options, set_value('detail_kalender_akademik_kode_kalender_akademik', isset($detail_kalender_akademik['kode_kalender_akademik']) ? $detail_kalender_akademik['kode_kalender_akademik'] : ''), 'Kode Kalender Akademik'. lang('bf_form_label_required'))?>        <div class="control-group <?php echo form_error('detail_kalender_akademik_deskripsi_detail_kalender_akademik') ? 'error' : ''; ?>">
            <?php echo form_label('Deskripsi Detail Kalender Akademik'. lang('bf_form_label_required'), 'detail_kalender_akademik_deskripsi_detail_kalender_akademik', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="detail_kalender_akademik_deskripsi_detail_kalender_akademik" type="text" name="detail_kalender_akademik_deskripsi_detail_kalender_akademik" maxlength="100" value="<?php echo set_value('detail_kalender_akademik_deskripsi_detail_kalender_akademik', isset($detail_kalender_akademik['deskripsi_detail_kalender_akademik']) ? $detail_kalender_akademik['deskripsi_detail_kalender_akademik'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('detail_kalender_akademik_deskripsi_detail_kalender_akademik'); ?></span>
        </div>


        </div>
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
            <input type="submit" name="save" class="btn btn-primary" value="Edit Detail Kalender Akademik" />
            or <?php echo anchor(SITE_AREA .'/jurusan/detail_kalender_akademik', lang('detail_kalender_akademik_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Detail_Kalender_Akademik.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('detail_kalender_akademik_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('detail_kalender_akademik_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
