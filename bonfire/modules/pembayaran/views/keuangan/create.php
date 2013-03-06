    <meta charset="UTF-8">        
    <style>
		.ui-autocomplete { position: absolute; cursor: default; }	
        .ui-autocomplete-loading { background: white url('<?php echo base_url(); ?>assets/images/ui-anim_basic_16x16.gif') right center no-repeat; }
    </style>
        
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php echo form_open($this->uri->uri_string()); ?>
<div class="well">
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
         <div class="container">
            <a class="brand" href="#">NIM Mahasiswa</a>
            <input style="margin-top: 5px;" type="text"  name="nim" id="nim" class="search-query" placeholder="Masukan 4 digit NIM terakhir" />
            <input style="margin-top: 5px;" id="nama" type="text" name="nama_kurikulum_nama_kurikulum" class="span6 search-query"  />
        </div><!-- /navbar-inner -->
        </div>
    </div><!-- /navbar -->
    <input id="urla" type="hidden" value="<?php echo base_url().SITE_AREA; ?>/keuangan/pembayaran/lookup"  />  
    <input id="linka" type="hidden" value="<?php echo base_url().SITE_AREA; ?>/keuangan/pembayaran/get_pembayaran/"  /> 
    <div id="jenis_pembayaran"></div>
    <div class="form-actions">
        <input type="submit" name="save" class="btn-large btn-primary" value="Create Nama Kurikulum" />
        or <?php echo anchor(SITE_AREA .'/keuangan/pembayaran', lang('pembayaran_cancel'), 'class="btn-large btn-warning"'); ?>
    </div>
   <?php echo form_close(); ?>


</div>
<link rel="stylesheet" href="<?php echo css_path(); ?>jquery/jquery-ui-1.9.2.custom.min.css">
<script src="<?php echo js_path(); ?>jquery-ui-1.9.2.custom.min.js"></script>