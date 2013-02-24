<div class="well">
<div class="navbar navbar-inverse">
        <div class="navbar-inner">
         <div class="container">
		  <a class="brand" href="#">Pencarian </a>
		<?php echo form_open("",'class="navbar-search pull-left"'); ?>
		  <input type="text" class="search-query" placeholder="Masukkan kata kunci..." name="cari">
		<?php echo form_close(); ?>
        
        
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
    
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Nama_Kurikulum.Jurusan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Nama Kurikulum</th>
					<th>Nama Jurusan</th>
					<th>Status Kurikulum</th>
					<th>Created</th>
					<th>Modified</th>
                    <th>Action</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Nama_Kurikulum.Jurusan.Delete')) : ?>
				<tr>
					<td colspan="7">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('nama_kurikulum_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Nama_Kurikulum.Jurusan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->kode_nama_kurikulum ?>" /></td>
					<?php endif;?>
					
				
				<td><?php echo $record->nama_kurikulum ?></td>
				
			
				<td><?php echo $record->nama_jurusan?></td>
				<td><?php echo ($record->status_kurikulum=='A') ? "Aktif" : "Tidak Aktif"; ?></td>
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
                <td><div class="btn-group">
                        <?php echo anchor(SITE_AREA .'/jurusan/kurikulum/index/'.$record->kode_nama_kurikulum,'<i class="icon-list-alt"></i> Lihat Matakuliah','title="Lihat Mata Kuliah Kurikulum ini" class="btn small-box"'); ?>
			          
			          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><?php echo anchor(SITE_AREA .'/jurusan/nama_kurikulum/edit/'. $record->kode_nama_kurikulum, '<i class="icon-edit"></i> Ubah Nama Kurikulum','title="Ubah Kurikulum"'  ); ?></li>
			            <li><?php echo anchor(SITE_AREA .'/jurusan/kurikulum/create/'. $record->kode_nama_kurikulum,'<i class="icon-plus-sign"></i> Tambah Matakuliah','title="Tambah Mata Kuliah Kurikulum ini"'); ?></li>
			          </ul>
			        </div><!-- /btn-group --></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="7">Data Nama Kurikulum Kosong.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>