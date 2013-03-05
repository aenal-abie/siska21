<div class="admin-box">
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Data_Dosen.Dosen.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Nik</th>
					<th>Nidn</th>
					<th>Nama Dosen</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Alamat</th>
					<th>Kota</th>
					<th>Propinsi</th>
					<th>Kodepos</th>
					<th>Telepon</th>
					<th>Email</th>
					<th>Website</th>
					<th>Kepakaran</th>
					<th>Peminatan</th>
					<th>Foto</th>
					<th>Status</th>
					<th>Status Perwalian</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Data_Dosen.Dosen.Delete')) : ?>
				<tr>
					<td colspan="22">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('data_dosen_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Data_Dosen.Dosen.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_dosen ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Data_Dosen.Dosen.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/dosen/data_dosen/edit/'. $record->kode_dosen, '<i class="icon-pencil"></i>'  ); echo "&nbsp;&nbsp;" . $record->nik ?></td>
				<?php else: ?>
				<td><?php echo $record->nik ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->nidn?></td>
				<td><?php echo $record->nama_dosen?></td>
				<td><?php echo $record->tempat_lahir?></td>
				<td><?php echo $record->tanggal_lahir?></td>
				<td><?php echo $record->jenis_kelamin?></td>
				<td><?php echo $record->agama?></td>
				<td><?php echo $record->alamat?></td>
				<td><?php echo $record->kota?></td>
				<td><?php echo $record->propinsi?></td>
				<td><?php echo $record->kodepos?></td>
				<td><?php echo $record->telepon?></td>
				<td><?php echo $record->email?></td>
				<td><?php echo $record->website?></td>
				<td><?php echo $record->kepakaran?></td>
				<td><?php echo $record->peminatan?></td>
				<td><?php echo "<img src=\"". base_url(). "uploads/foto/dosen/". $record->foto."\" border=\"0\"/>" ?></td>	
				<td><?php echo $record->status?></td>
				<td><?php echo $record->status_perwalian?></td>
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="22">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>		
	<?php echo form_close(); ?>
	<?php echo $this->pagination->create_links(); ?>
</div>