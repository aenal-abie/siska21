<script type="text/javascript">
var alias;

$(this).ready( function() {
    
    $('#matakuliah_k1').hide();
    $('#matakuliah_k3').hide();
    
     $('#matakuliah_jenjang').change(function(){
	alias = $('#matakuliah_jenjang').val();
    
    if(alias=='S'){
        $('#matakuliah_k1').show();
        $('#matakuliah_k3').hide();
    } else if(alias=='D'){
       $('#matakuliah_k3').show();
       $('#matakuliah_k1').hide(); 
    }else {
        $('#matakuliah_k3').hide();
       $('#matakuliah_k1').hide();
    }
});
    });
    

</script>

<div class="well">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($matakuliah) ) {
    $matakuliah = (array)$matakuliah;
}
$id = isset($matakuliah['id']) ? $matakuliah['id'] : '';
?>


<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
    <legend>Pilih Syarat Kode Mata Kuliah</legend>
            <?php
                $options=array(
                    'T'=>'Teknik',
                    'T'=>'Teknik',
                    'M'=>'Manajemen',
                )
            ?>
             <?php echo form_dropdown('matakuliah_prodi', $options,set_value('matakuliah_prodi'), 'Program Studi '. lang('bf_form_label_required'),'id="matakuliah_prodi" class="chzn-select" ')?>            
             <?php
                $options=array(
                    ''=>'',
                    'D'=>'Diploma',
                    'S'=>'Strata 1',
                )
            ?>
             <?php echo form_dropdown('matakuliah_jenjang', $options,set_value('matakuliah_jenjang'), 'Jenjang '. lang('bf_form_label_required'),"id='matakuliah_jenjang' class='chzn-select' data-placeholder='Pilih Jenjang...'")?>
            <?php
                $options=array(
                    'PK'=>' Pengembangan Kepribadian ',
                    'KK'=>'Keilmuan dan Ketrampilan ',
                    'KB'=>'Keahlian Berkarya ',
                    'PB'=>'Perilaku Berkarya  ',
                    'BB'=>'Berkehidupan Bermasyarakat  ',
                )
            ?>
             <?php echo form_dropdown('matakuliah_kelompok', $options,set_value('matakuliah_kelompok'), 'Kelompok Mata Kuliah '. lang('bf_form_label_required'),"class='chzn-select'")?>

            <?php
                $semester=array(
                    '1'=>'Semester 1 ',
                    '2'=>'Semester 2 ',
                    '3'=>'Semester 3 ',
                    '4'=>'Semester 4 ',
                    '5'=>'Semester 5 ',
                    '6'=>'Semester 6 ',
                    '7'=>'Semester 7 ',
                    '8'=>'Semester 8 ',
                )
            ?>
             <?php echo form_dropdown('matakuliah_semester', $semester,set_value('matakuliah_semester'), 'Semester '. lang('bf_form_label_required'),"class='chzn-select'")?>
             
              <?php
                $kopetensi=array(
                            "00"=> "Umum","01" => "RPL", "02" => "Jaringan",
                            "03" => "Multimedia", "04" => "RPL & Jaringan",
                            "05" => "RPL & Multimedia", "06" => "Jaringan & Multimedia",
                            "07" => "RPL, Jaringan, & Multimedia",
                )
            ?>
             <div id="matakuliah_k1">
             <?php echo form_dropdown('matakuliah_k1', $kopetensi,set_value('matakuliah_k1'), 'Kopetensi S1 '. lang('bf_form_label_required'),"class='chzn-select' id='k'")?>
             </div>
             <?php
                $kopetensi=array(
                            "00"=> "Umum","01" => "Pemrograman", "02" => "Sistem Operasi",
                            "03" => "Jariangan", "04" => "Multimedia",
                )
            ?>
            <div id="matakuliah_k3">
             <?php echo form_dropdown('matakuliah_k3', $kopetensi,set_value('matakuliah_k3'), 'Kopetensi D3 '. lang('bf_form_label_required'),"class='chzn-select' id='matakuliah_k3'")?>
             </div>
    </fieldset>
    
    <fieldset>
    <legend>Mata Kuliah</legend>
        <div class="control-group <?php echo form_error('matakuliah_nama_matakuliah') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Matakuliah', 'matakuliah_nama_matakuliah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_nama_matakuliah" type="text" name="matakuliah_nama_matakuliah" maxlength="75" value="<?php echo set_value('matakuliah_nama_matakuliah', isset($matakuliah['nama_matakuliah']) ? $matakuliah['nama_matakuliah'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_nama_matakuliah'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_teori') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Teori', 'matakuliah_sks_teori', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_teori" type="text" name="matakuliah_sks_teori" maxlength="1" value="<?php echo set_value('matakuliah_sks_teori', '0'); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_teori'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_praktek') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Praktek', 'matakuliah_sks_praktek', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_praktek" type="text" name="matakuliah_sks_praktek" maxlength="1" value="<?php echo set_value('matakuliah_sks_praktek', '0'); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_praktek'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_praktikum') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Praktikum', 'matakuliah_sks_praktikum', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_praktikum" type="text" name="matakuliah_sks_praktikum" maxlength="1" value="<?php echo set_value('matakuliah_sks_praktikum', '0'); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_praktikum'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create matakuliah" />
            or <?php echo anchor(SITE_AREA .'/jurusan/matakuliah', lang('matakuliah_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
<script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
