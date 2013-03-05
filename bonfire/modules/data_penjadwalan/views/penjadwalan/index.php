<div class="admin-box">
	<h3>Data Penjadwalan</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Data_Penjadwalan.Penjadwalan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Kode Tahun Akademik</th>
					<th>Kode Matakuliah</th>
					<th>Kode Dosen</th>
					<th>Kode Ruang</th>
					<th>Kelompok</th>
					<th>Jam Mulai</th>
					<th>Jam Berakhir</th>
					<th>Status Perkuliahan</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Data_Penjadwalan.Penjadwalan.Delete')) : ?>
				<tr>
					<td colspan="11">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('data_penjadwalan_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Data_Penjadwalan.Penjadwalan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_penjadwalan ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Data_Penjadwalan.Penjadwalan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/penjadwalan/data_penjadwalan/edit/'. $record->kode_penjadwalan, '<i class="icon-pencil"></i>'  ); echo "&nbsp;&nbsp;" . $record->kode_tahun_akademik ?></td>
				<?php else: ?>
				<td><?php echo $record->kode_tahun_akademik ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->kode_matakuliah?></td>
				<td><?php echo $record->kode_dosen?></td>
				<td><?php echo $record->kode_ruang?></td>
				<td><?php echo $record->kelompok?></td>
				<td><?php echo $record->jam_mulai?></td>
				<td><?php echo $record->jam_berakhir?></td>
				<td><?php echo $record->status_perkuliahan?></td>
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="11">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>