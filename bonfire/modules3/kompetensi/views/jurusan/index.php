<div class="admin-box">
	<h3>Kompetensi</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Kompetensi.Jurusan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Kode Kompetensi</th>
					<th>Nama Jurusan</th>
					<th>Nama Kompetensi</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Kompetensi.Jurusan.Delete')) : ?>
				<tr>
					<td colspan="6">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('kompetensi_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Kompetensi.Jurusan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_kompetensi ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Kompetensi.Jurusan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/jurusan/kompetensi/edit/'. $record->kode_kompetensi, '<i class="icon-edit"></i>'); echo '&nbsp;&nbsp;' .  $record->kode_kompetensi ?></td>
				<?php else: ?>
				<td><?php echo $record->kode_kompetensi ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->nama_jurusan?></td>
				<td><?php echo $record->nama_kompetensi?></td>
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="6">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>