<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />
<?php // Change the css classes to suit your needs
if( isset($beban_studi) ) {
    $beban_studi = (array)$beban_studi;
}
$id = isset($beban_studi['kode_beban_studi']) ? $beban_studi['kode_beban_studi'] : '';
?>
<div class="admin-box">
    <h3>Beban Studi</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php // Change the values in this array to populate your dropdown as required ?>

        <?php 

            $kosong = array( '' => 'Data Kosong');
        
         ?>

        <?php echo form_dropdown('beban_studi_kode_nama_jurusan', isset($options) ? $options : $kosong, set_value('beban_studi_kode_nama_jurusan', isset($beban_studi['kode_nama_jurusan']) ? $beban_studi['kode_nama_jurusan'] : ''), 'Nama Jurusan '. lang('bf_form_label_required'),"id='beban_studi_kode_nama_jurusan'")?>      
          <div class="control-group <?php echo form_error('beban_studi_jumlah_sks') ? 'error' : ''; ?>">
            <?php echo form_label('Jumlah SKS Minimal '. lang('bf_form_label_required'), 'beban_studi_jumlah_sks', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="beban_studi_jumlah_sks" type="text" name="beban_studi_jumlah_sks" maxlength="10" value="<?php echo set_value('beban_studi_jumlah_sks', isset($beban_studi['jumlah_sks']) ? $beban_studi['jumlah_sks'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('beban_studi_jumlah_sks'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Beban Studi" />
            or <?php echo anchor(SITE_AREA .'/jurusan/beban_studi', lang('beban_studi_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Beban_Studi.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('beban_studi_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('beban_studi_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
 <script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript"> $("#beban_studi_kode_nama_jurusan").chosen({allow_single_deselect: true});  </script>
