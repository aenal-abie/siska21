<div class="admin-box">
	<h3>Mahasiswa Bumigora</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Mahasiswa_Bumigora.Mahasiswa.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Npm</th>
					<th>Nomor Pendaftaran</th>
					<th>Nomor Pendaftaran Ulang</th>
					<th>Nama Mahasiswa</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>Kota</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Mahasiswa_Bumigora.Mahasiswa.Delete')) : ?>
				<tr>
					<td colspan="11">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('mahasiswa_bumigora_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Mahasiswa_Bumigora.Mahasiswa.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->nim ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Mahasiswa_Bumigora.Mahasiswa.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/mahasiswa/mahasiswa_bumigora/edit/'. $record->nim, '<i class="icon-pencil"></i>'  ); echo "&nbsp;&nbsp;" . $record->npm ?></td>
				<?php else: ?>
				<td><?php echo $record->npm ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->nomor_pendaftaran?></td>
				<td><?php echo $record->nomor_pendaftaran_ulang?></td>
				<td><?php echo $record->nama_mahasiswa?></td>
				<td><?php echo $record->tempat_lahir?></td>
				<td><?php echo $record->tanggal_lahir?></td>
				<td><?php echo $record->alamat?></td>
				<td><?php echo $record->kota?></td>
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