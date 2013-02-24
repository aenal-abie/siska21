
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($data_jurusan) ) {
    $data_jurusan = (array)$data_jurusan;
}
$id = isset($data_jurusan['kode_jurusan']) ? $data_jurusan['kode_jurusan'] : '';
?>
<div class="admin-box">
    <h3>Data Jurusan</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('data_jurusan_kode_jurusan') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Jurusan'. lang('bf_form_label_required'), 'data_jurusan_kode_jurusan', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_jurusan_kode_jurusan" type="text" name="data_jurusan_kode_jurusan" maxlength="2" value="<?php echo set_value('data_jurusan_kode_jurusan', isset($data_jurusan['kode_jurusan']) ? $data_jurusan['kode_jurusan'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_jurusan_kode_jurusan'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('data_jurusan_nama_jurusan') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Jurusan'. lang('bf_form_label_required'), 'data_jurusan_nama_jurusan', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="data_jurusan_nama_jurusan" type="text" name="data_jurusan_nama_jurusan" maxlength="20" value="<?php echo set_value('data_jurusan_nama_jurusan', isset($data_jurusan['nama_jurusan']) ? $data_jurusan['nama_jurusan'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('data_jurusan_nama_jurusan'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Data Jurusan" />
            or <?php echo anchor(SITE_AREA .'/jurusan/data_jurusan', lang('data_jurusan_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Data_Jurusan.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('data_jurusan_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('data_jurusan_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
