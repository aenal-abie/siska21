
 <div class="well">
<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Beban Studi</a>
		<div class="span5 pull-right">
		<?php echo form_open("",'class="navbar-form pull-left"'); ?>
		<?php echo form_close(); ?>
		</div>
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
    
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Beban_Studi.Jurusan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Nama Jurusan</th>
					<th>Jumlah Sks</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Beban_Studi.Jurusan.Delete')) : ?>
				<tr>
					<td colspan="5">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('beban_studi_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Beban_Studi.Jurusan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_beban_studi ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Beban_Studi.Jurusan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/jurusan/beban_studi/edit/'. $record->kode_beban_studi, '<i class="icon-edit">&nbsp;</i>') . "&nbsp;&nbsp;" . $record->nama_jurusan ?></td>
				<?php else: ?>
				<td><?php echo $record->nama_jurusan ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->jumlah_sks?></td>
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