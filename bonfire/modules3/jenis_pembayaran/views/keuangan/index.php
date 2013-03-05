<div class="well well-small">

	  <div class="navbar navbar-inverse">
        <div class="navbar-inner">
         <div class="container">
		  <a class="brand" href="#">Pencarian </a>
		
		<?php echo form_open("app_front/cari",'class="navbar-search pull-left"'); ?>
		  <input type="text" class="search-query" placeholder="Masukkan kata kunci..." name="cari">
		 
		<?php echo form_close(); ?>
		
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
    
    
     <div class="container">
    
    
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Jenis_Pembayaran.Keuangan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
                    <th>Angkatan/<br/>Periode</th>
					<th>Jenis Pembayaran</th>
                    <th>Nama Jurusan</th>                    
					<th style="text-align: right;">Jumlah</th>
					<th style="text-align: center;">Prosentase Denda</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Jenis_Pembayaran.Keuangan.Delete')) : ?>
				<tr>
					<td colspan="8">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('jenis_pembayaran_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Jenis_Pembayaran.Keuangan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_jenis_pembayaran ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Jenis_Pembayaran.Keuangan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/keuangan/jenis_pembayaran/edit/'. $record->kode_jenis_pembayaran , '<i class="icon-edit"></i>'  );echo "&nbsp;&nbsp;" ;  echo  $record->angkatan; ?></td>
				<?php else: ?>
				<td><?php echo $record->angkatan?></td>
				<?php endif; ?> 	
				<td><?php echo $record->jenis_pembayaran?></td>
                <td><?php echo($record->nama_jurusan!="") ? $record->nama_jurusan: "Semua"?></td>
				<td style="text-align: right;"><?php echo number_format($record->jumlah,0)?></td>
				<td style="text-align: center;"><?php echo $record->prosentase_denda?> %</td>
                <td><?php echo $record->tanggal_add ?></td>
                <td><?php echo $record->tanggal_edit ?></td>
			
				
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="7">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>
</div>

