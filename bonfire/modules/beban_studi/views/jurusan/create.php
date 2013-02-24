<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />

<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($beban_studi) ) {
    $beban_studi = (array)$beban_studi;
}
$id = isset($beban_studi['kode_beban_studi']) ? $beban_studi['kode_beban_studi'] : '';
?>


<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>


        <?php 

        $kosong = array( '' => 'Data Kosong');
        
         ?>

        <?php echo form_dropdown('beban_studi_kode_nama_jurusan', isset($options) ? $options : $kosong , set_value('beban_studi_kode_nama_jurusan', isset($beban_studi['beban_studi_kode_nama_jurusan']) ? $beban_studi['beban_studi_kode_nama_jurusan'] : ''), 'Nama Jurusan '. lang('bf_form_label_required'),"id='beban_studi_kode_nama_jurusan'")?>      
        
        <div class="control-group <?php echo form_error('beban_studi_jumlah_sks') ? 'error' : ''; ?>">
            <?php echo form_label('Jumlah SKS Minimal '. lang('bf_form_label_required'), 'beban_studi_jumlah_sks', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="beban_studi_jumlah_sks" type="text" name="beban_studi_jumlah_sks" maxlength="10" value="<?php echo set_value('beban_studi_jumlah_sks', isset($beban_studi['beban_studi_jumlah_sks']) ? $beban_studi['beban_studi_jumlah_sks'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('beban_studi_jumlah_sks'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Beban Studi" />
            or <?php echo anchor(SITE_AREA .'/jurusan/beban_studi', lang('beban_studi_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>

 <script src="<?php echo base_url() ?>assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript"> $("#beban_studi_kode_nama_jurusan").chosen({allow_single_deselect: true});  </script>
