<link rel="stylesheet" href="<?php echo css_path(); ?>jquery/jquery-ui-1.9.2.custom.min.css">
<script src="<?php echo js_path(); ?>jquery-ui-1.9.2.custom.min.js"></script>
    <meta charset="UTF-8">        
    <style>
		.ui-autocomplete { position: absolute; cursor: default; }	
        .ui-autocomplete-loading { background: white url('<?php echo base_url(); ?>assets/images/ui-anim_basic_16x16.gif') right center no-repeat; }
    </style>
    
<div class="well well-small">
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
         <div class="container">
            <a class="brand" href="#">NIM Mahasiswa</a>
            <input type="text" value="<?php echo $nim; ?>" style="margin-top: 5px;"  id="nim" class="search-query" placeholder="Masukan 4 digit NIM terakhir" />
            <input value="<?php echo $nama_mahasiswa; ?>" style="margin-top: 5px;" id="nama" type="text" name="nama_kurikulum_nama_kurikulum" class="span6 search-query" placeholder="Nama Mahasiswa" readonly="" />
        </div><!-- /navbar-inner -->
        </div>
    </div><!-- /navbar -->
    <input id="urla" type="hidden" value="<?php echo base_url().SITE_AREA; ?>/keuangan/pembayaran/lookup"  /> 
    <input id="linka" type="hidden" value="<?php echo base_url().SITE_AREA; ?>/keuangan/pembayaran/getpembayaran_mahasiswa/"  />  
	<?php echo form_open($this->uri->uri_string()); ?>
    <div id="data_permahasiswa">
    <div id="data">
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Pembayaran</th>
                    <th>Jumlah</th>
                    <th>Tahun Akademik</th>
                    <th>Semester</th>
                    <th>Status</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Delete')) : ?>
				<tr>
					<td colspan="8">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('pembayaran_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_pembayaran ?>" /></td>
					<?php endif;?>
				<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/keuangan/pembayaran/edit/'. $record->kode_pembayaran, '<i class="icon-edit"></i>'  ); echo "&nbsp;&nbsp;" . $record->nim ?></td>
				<?php else: ?>
				<td><?php echo $record->nim ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->nama_mahasiswa?></td>
				<td><?php echo $record->jenis_pembayaran?></td>
                <td><?php echo number_format($record->jumlah,0,'',',')?></td>
                <td><?php echo $record->tahun_akademik?></td>
                <td><?php echo ($record->semester=='0') ? "Genap" :"Ganjil"; ?></td>
                <td>
                <?php 
                    $jenis = array('L'=>'Lunas', 'D'=>'Dispensasi','LD'=>'Lunas Dispensasi');
                    $link_bayar_dispen = "<a title='Bayar Dispensasi' class=\"btn small-box\" style='margin-top:-3px;'  class='btn btn-small btn-warning' href='".base_url(SITE_AREA."/keuangan/pembayaran/pembayaran_dispensasi/$record->kode_pembayaran")."'><i class=\"icon-share\"></i> Bayar ".$jenis[$record->status_pembayaran]."</a>"; 
                    //echo ($record->status_pembayaran != 'D') ? $jenis[$record->status_pembayaran] 
                      //     :$link_bayar_dispen; 
                      //if ($record->status_pembayaran != 'D') {
                       
                ?>
                <div class="btn-group">
                        
                    <?php echo ($record->status_pembayaran != 'D') ? 
                    "<a title='Bayar Dispensasi' class=\"btn small-box\" '  class='btn btn-small btn-warning' href='#'><i class=\"icon-list-alt\"></i>  ".$jenis[$record->status_pembayaran]."</a>":
                    "<a title='Bayar Dispensasi' class=\"btn small-box\" '  class='btn btn-small btn-warning' href='".base_url(SITE_AREA."/keuangan/pembayaran/pembayaran_dispensasi/$record->kode_pembayaran")."'><i class=\"icon-share\"></i> Bayar ".$jenis[$record->status_pembayaran]."</a>";
                    ?>
			          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><?php echo anchor(base_url(SITE_AREA."/keuangan/pembayaran/cetak_nota/$record->kode_pembayaran"),'<i class="icon-print"></i> Cetak Bukti Pembayaran','target="_blank"'); ?></li>
			          </ul>
			        </div><!-- /btn-group -->
                    <?php //} else echo $link_bayar_dispen;  ?>
                    </td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="7">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
    </div> <!-- end of class data data -->
	<?php echo form_close(); ?>
    <?php echo $this->pagination->create_links(); ?>
</div>
</div>
