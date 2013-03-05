<div class="admin-box">
	<h3>Kode Jenis Pembayaran</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Kode_Jenis_Pembayaran.Keuangan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Kode Jenis Pembayaran</th>
					<th>Jenis Pembayaran</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Kode_Jenis_Pembayaran.Keuangan.Delete')) : ?>
				<tr>
					<td colspan="5">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('kode_jenis_pembayaran_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Kode_Jenis_Pembayaran.Keuangan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_jenis_pembayaran ?>" /></td>
					<?php endif;?>
				<?php if ($this->auth->has_permission('Kode_Jenis_Pembayaran.Keuangan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/keuangan/kode_jenis_pembayaran/edit/'. $record->kode_jenis_pembayaran, '<i class="icon-edit"></i>'  ); echo "&nbsp;&nbsp;" . $record->kode_jenis_pembayaran ?></td>
				<?php else: ?>
				<td><?php echo $record->kode_jenis_pembayaran ?></td>
				<?php endif; ?>
				<td><?php echo $record->jenis_pembayaran?></td>
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="5">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>