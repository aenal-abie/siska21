<div class="admin-box">
	<h3>Sistem Penilaian</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Sistem_Penilaian.Jurusan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Nilai Minimum</th>
					<th>Nilai Maksimum</th>
					<th>Grade</th>
					<th>Bobot Nilai</th>
					<th>Kategori</th>
					<th>Keterangan</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Sistem_Penilaian.Jurusan.Delete')) : ?>
				<tr>
					<td colspan="9">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('sistem_penilaian_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Sistem_Penilaian.Jurusan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_sistem_penilaian ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Sistem_Penilaian.Jurusan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/jurusan/sistem_penilaian/edit/'. $record->kode_sistem_penilaian, '<i class="icon-edit"></i>'); echo '&nbsp;&nbsp;' .  $record->nilai_minimum ?></td>
				<?php else: ?>
				<td><?php echo $record->nilai_minimum ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->nilai_maksimum?></td>
				<td><?php echo $record->grade?></td>
				<td><?php echo $record->bobot_nilai?></td>
				<td><?php echo $record->kategori?></td>
				<td><?php echo $record->keterangan?></td>
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="9">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>