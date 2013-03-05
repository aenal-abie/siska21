<div class="admin-box">
	<h3>Matakuliah Prasyarat</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Matakuliah_Prasyarat.Jurusan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Kode Nama Kurikulum</th>
					<th>Matakuliah Yg Diambil</th>
					<th>Matakuliah Prasyarat</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Matakuliah_Prasyarat.Jurusan.Delete')) : ?>
				<tr>
					<td colspan="6">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('matakuliah_prasyarat_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Matakuliah_Prasyarat.Jurusan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_matakuliah_prasyarat ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Matakuliah_Prasyarat.Jurusan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/jurusan/matakuliah_prasyarat/edit/'. $record->kode_matakuliah_prasyarat, '<i class="icon-pencil"></i>'  ); echo "&nbsp;&nbsp;" . $record->kode_nama_kurikulum ?></td>
				<?php else: ?>
				<td><?php echo $record->kode_nama_kurikulum ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->matakuliah_yg_diambil?></td>
				<td><?php echo $record->matakuliah_prasyarat?></td>
				<td><?php echo $record->?></td>
				<td><?php echo $record->?></td>
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