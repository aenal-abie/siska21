<div class="admin-box">
	<h3>Departemen</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Departemen.Manajemen.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Nama Departemen</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Departemen.Manajemen.Delete')) : ?>
				<tr>
					<td colspan="4">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('departemen_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Departemen.Manajemen.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_departemen ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Departemen.Manajemen.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/manajemen/departemen/edit/'. $record->kode_departemen, '<i class="icon-edit"></i>'  ); echo "&nbsp;&nbsp;" . $record->nama_departemen ?></td>
				<?php else: ?>
				<td><?php echo $record->nama_departemen ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="4">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>