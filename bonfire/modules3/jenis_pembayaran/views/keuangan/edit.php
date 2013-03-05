<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />

<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($jenis_pembayaran) ) {
    $jenis_pembayaran = (array)$jenis_pembayaran;
    //print_r($jenis_pembayaran);
}
//$id = isset($jenis_pembayaran['kode_jenis_pembayaran']) ? $jenis_pembayaran['kode_jenis_pembayaran'] : '';
?>
<div class="container container-fluid">
<div class="well well-small">
<div class="navbar navbar-inverse">
        <div class="navbar-inner">
         <div class="container">
		  <a class="brand" href="#">Ubah Data</a>
		
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <?php echo form_dropdown('kode_jenis_pembayaran', isset($kode_jenis_pembayaran) ? $kode_jenis_pembayaran: $kosong, set_value('kode_jenis_pembayaran', isset($jenis_pembayaran['jenis_pembayaran']) ? $jenis_pembayaran['jenis_pembayaran'] : ''), 'Kode Jenis Pembayaran '. lang('bf_form_label_required'),'id ="kode_jenis_pembayaran" class="chzn-select span3" data-placeholder="Pilih  Jenis Pembayaran..."')?>
               
        
        <div class="control-group <?php echo form_error('angkatan') ? 'error' : ''; ?>">
            <?php echo form_label('Angkatan'. lang('bf_form_label_required'), 'angkatan', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input class="span3" id="angkatan" type="text" name="angkatan" maxlength="4" value="<?php echo set_value('angkatan', isset($jenis_pembayaran['angkatan']) ? $jenis_pembayaran['angkatan'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('angkatan'); ?></span>
        <span class="help-block">Masukan angka 0 untuk semua angkatan</span>
        </div>
        </div>
        <?php // Change the values in this array to populate your dropdown as required 
        $kosong = array(
                "" => "Data Jurusan","99"=>"Semua Jurusan");
                ?>
        <?php echo form_dropdown('kode_nama_jurusan', isset($nama_jurusan) ? $nama_jurusan: $kosong, set_value('kode_nama_jurusan', isset($jenis_pembayaran['kode_nama_jurusan']) ? $jenis_pembayaran['kode_nama_jurusan'] : ''), 'Nama Jurusan '. lang('bf_form_label_required'),'class="chzn-select span3" data-placeholder="Pilih Nama Jurusan..."')?>    
        
        
        <div class="control-group <?php echo form_error('jumlah') ? 'error' : ''; ?>">
            <?php echo form_label('Jumlah'. lang('bf_form_label_required'), 'jumlah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <div class="input-prepend">
        <span class="add-on">Rp.</span><input id="jumlah" class="span2" type="text" name="jumlah" maxlength="10"  value="<?php echo set_value('jumlah', isset($jenis_pembayaran['jumlah']) ? $jenis_pembayaran['jumlah'] : ''); ?>" onfocus="formatNumber(this);" onkeyup="formatNumber(this);" onchange="formatNumber(this);  />
        <span class="help-inline"><?php echo form_error('jumlah'); ?></span>
        </div>
        </div>


        </div>
        <div class="control-group <?php echo form_error('prosentase_denda') ? 'error' : ''; ?>">
            <?php echo form_label('Prosentase Denda', 'prosentase_denda', array('class' => "control-label") ); ?>
            <div class='controls'>
            <div class="input-append">
        <input class="span2" id="prosentase_denda" class="span1" type="text" name="prosentase_denda" maxlength="10" value="<?php echo set_value('prosentase_denda', isset($jenis_pembayaran['prosentase_denda']) ? $jenis_pembayaran['prosentase_denda'] : ''); ?>"  /><span class="add-on">%</span>
    </div>
        <span class="help-inline"><?php echo form_error('prosentase_denda'); ?></span>
        </div>


        </div>


        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit Jenis Pembayaran" />
            or <?php echo anchor(SITE_AREA .'/keuangan/jenis_pembayaran', lang('jenis_pembayaran_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Jenis_Pembayaran.Keuangan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('jenis_pembayaran_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('jenis_pembayaran_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
</div>
 <script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
  <script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
