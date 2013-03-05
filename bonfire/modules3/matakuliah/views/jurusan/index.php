<div class="well">
<div class="navbar navbar-inverse">
        <div class="navbar-inner">
         <div class="container">
		  <a class="brand" href="#">Pencarian </a>
          <ul class="nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pilih Lebih Spesifik<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li class="nav-header">Jenjang</li>
                          <li><a href="#">S1 Informatiaka</a></li>
                          <li><a href="#">D3 Informatika</a></li>
                          <li><a href="#">D3 Manajemen Informatika</a></li>
                        </ul>
                      </li>
                    </ul>
		<?php echo form_open("",'class="navbar-search pull-left"'); ?>
		  <input type="text" class="search-query" placeholder="Masukkan kata kunci..." name="cari">
		<?php echo form_close(); ?>
        
        
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Matakuliah.Jurusan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Kode Matakuliah</th>
					<th>Nama Matakuliah</th>
					<th>Sks Teori</th>
					<th>Sks Praktek</th>
					<th>Sks Praktikum</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Matakuliah.Jurusan.Delete')) : ?>
				<tr>
					<td colspan="8">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('matakuliah_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Matakuliah.Jurusan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_matakuliah ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Matakuliah.Jurusan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/jurusan/matakuliah/edit/'. $record->kode_matakuliah, '<i class="icon-edit"></i>'  ); echo "&nbsp;&nbsp;" . $record->kode_matakuliah ?></td>
				<?php else: ?>
				<td><?php echo $record->kode_matakuliah ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->nama_matakuliah?></td>
				<td><?php echo $record->sks_teori?></td>
				<td><?php echo $record->sks_praktek?></td>
				<td><?php echo $record->sks_praktikum?></td>
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
    <?php echo $this->pagination->create_links(); ?>

</div>