
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/chosen.css" />
<div class="well">
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
                // urutannya $kode_mata_kuliah=$prodi.$jenjang.$kelompok.$t_sks.$semester.$kopetensi dan urut 00;
                isset($matakuliah['kode_matakuliah']) ? $kode= $matakuliah['kode_matakuliah'] : $kode='';
                $prodi=substr($kode,0,1); // sub 1 prodi
                $jenjang=substr($kode,1,1); // sub 2 jemjang
                $kelompok=substr($kode,2,2); // sub 3 dan 4 / kelompok
                // total sks 5
                $dsemester=substr($kode,5,1); // sub 6
                ($jenjang=='S') ? $kopetensis1 = substr($kode,6,2) : $kopetensid3=substr($kode,6,2); // sub 7 dan 8                 
             ?>
                         
             <?php
                $options=array(
                    'T'=>'Teknik',
                    'M'=>'Manajemen',
                )
            ?>
             <?php echo form_dropdown('matakuliah_prodi', $options,set_value('matakuliah_prodi',$prodi), 'Program Studi '. lang('bf_form_label_required'),"class='chzn-select'")?>            
             <?php
                $options=array(
                    'D'=>'Diploma',
                    'S'=>'Strata 1',
                )
            ?>
             <?php echo form_dropdown('matakuliah_jenjang', $options,set_value('matakuliah_jenjang',$jenjang), 'Jenjang '. lang('bf_form_label_required'),"class='chzn-select'")?>
            <?php
                $options=array(
                    'PK'=>' Pengembangan Kepribadian ',
                    'KK'=>'Keilmuan dan Ketrampilan ',
                    'KB'=>'Keahlian Berkarya ',
                    'PB'=>'Perilaku Berkarya  ',
                    'BB'=>'Berkehidupan Bermasyarakat  ',
                )
            ?>
             <?php echo form_dropdown('matakuliah_kelompok', $options,set_value('matakuliah_kelompok',$kelompok), 'Kelompok Mata Kuliah '. lang('bf_form_label_required'),"class='chzn-select'")?>

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
             <?php echo form_dropdown('matakuliah_semester', $semester,set_value('matakuliah_semester',$dsemester), 'Semester '. lang('bf_form_label_required'),"class='chzn-select'")?>
             
              <?php
                $kopetensi=array(
                            "00"=> "Umum","01" => "RPL", "02" => "Jaringan",
                            "03" => "Multimedia", "04" => "RPL & Jaringan",
                            "05" => "RPL & Multimedia", "06" => "Jaringan & Multimedia",
                            "07" => "RPL, Jaringan, & Multimedia",
                )
            ?>
             <?php echo form_dropdown('matakuliah_k1', $kopetensi,set_value('matakuliah_k1',isset($kopetensis1)?$kopetensis1:"" ), 'Kopetensi S1 '. lang('bf_form_label_required'),"class='chzn-select'")?>
             <?php
                $kopetensi=array(
                            "00"=> "Umum","01" => "Pemrograman", "02" => "Sistem Operasi",
                            "03" => "Jariangan", "04" => "Multimedia",
                )
            ?>
             <?php echo form_dropdown('matakuliah_k3', $kopetensi,set_value('matakuliah_k3',isset($kopetensid3)?$kopetensid3:""), 'Kopetensi D3 '. lang('bf_form_label_required'),"class='chzn-select'")?>
             
    </fieldset>


    <fieldset>
    <legend>Mata Kuliah</legend>
        <div class="control-group <?php echo form_error('matakuliah_kode_matakuliah') ? 'error' : ''; ?>">
            <?php echo form_label('Kode Matakuliah', 'matakuliah_kode_matakuliah', array('class' => "control-label") ); ?>
            <div class='controls'>
            <input type="hidden" value="<?php echo isset($matakuliah['kode_matakuliah']) ? $matakuliah['kode_matakuliah'] : '' ?>" name="matakuliah_kode_matakuliah" />
            <span class="input uneditable-input"><?php echo set_value('matakuliah_kode_matakuliah', isset($matakuliah['kode_matakuliah']) ? $matakuliah['kode_matakuliah'] : ''); ?></span>    
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_nama_matakuliah') ? 'error' : ''; ?>">
            <?php echo form_label('Nama Matakuliah', 'matakuliah_nama_matakuliah', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input class="input-xxlarge" id="matakuliah_nama_matakuliah" type="text" name="matakuliah_nama_matakuliah" maxlength="75" value="<?php echo set_value('matakuliah_nama_matakuliah', isset($matakuliah['nama_matakuliah']) ? $matakuliah['nama_matakuliah'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_nama_matakuliah'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_teori') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Teori', 'matakuliah_sks_teori', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_teori" type="text" name="matakuliah_sks_teori" maxlength="1" value="<?php echo set_value('matakuliah_sks_teori', isset($matakuliah['sks_teori']) ? $matakuliah['sks_teori'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_teori'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_praktek') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Praktek', 'matakuliah_sks_praktek', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_praktek" type="text" name="matakuliah_sks_praktek" maxlength="1" value="<?php echo set_value('matakuliah_sks_praktek', isset($matakuliah['sks_praktek']) ? $matakuliah['sks_praktek'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_praktek'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('matakuliah_sks_praktikum') ? 'error' : ''; ?>">
            <?php echo form_label('Sks Praktikum', 'matakuliah_sks_praktikum', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="matakuliah_sks_praktikum" type="text" name="matakuliah_sks_praktikum" maxlength="1" value="<?php echo set_value('matakuliah_sks_praktikum', isset($matakuliah['sks_praktikum']) ? $matakuliah['sks_praktikum'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('matakuliah_sks_praktikum'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit matakuliah" />
            or <?php echo anchor(SITE_AREA .'/jurusan/matakuliah', lang('matakuliah_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Matakuliah.Jurusan.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('matakuliah_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('matakuliah_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
<script src="<?php echo base_url() ?>/assets/js/chosen/chosen.jquery.js" type="text/javascript"></script>
<script type="text/javascript"> $(".chzn-select").chosen({allow_single_deselect: true});  </script>
