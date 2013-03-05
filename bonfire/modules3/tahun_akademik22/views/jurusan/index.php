<div class="admin-box">
	<h3>Tahun Akademik</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Tahun_Akademik.Jurusan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Tahun Akademik</th>
					<th>Semester</th>
					<th>Tanggal Mulai</th>
					<th>Tanggal Berakhir</th>
					<th>Status</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Tahun_Akademik.Jurusan.Delete')) : ?>
				<tr>
					<td colspan="8">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('tahun_akademik_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Tahun_Akademik.Jurusan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_tahun_akademik ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Tahun_Akademik.Jurusan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/jurusan/tahun_akademik/edit/'. $record->kode_tahun_akademik, '<i class="icon-pencil"></i>'  ); echo "&nbsp;&nbsp;" . $record->tahun_akademik ?></td>
				<?php else: ?>
				<td><?php echo $record->tahun_akademik ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->semester?></td>
				<td><?php echo $record->tanggal_mulai?></td>
				<td><?php echo $record->tanggal_berakhir?></td>
				<td><?php echo $record->status?></td>
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="8">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>