<div class="admin-box">
	
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Data_Mahasiswa.Mahasiswa.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					<th>Nim</th>
					<th>Npm</th>
					<th>Nomor Pendaftaran</th>
					<th>Nomor Pendaftaran Ulang</th>
					<th>Nama Mahasiswa</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Alamat</th>
					<th>Kota</th>
					<th>Propinsi</th>
					<th>Telepon</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Golongan Darah</th>
					<th>Kewarganegaraan</th>
					<th>Nama Instansi</th>
					<th>Email</th>
					<th>Nama Ayah</th>
					<th>Agama Ayah</th>
					<th>Pekerjaan Ayah</th>
					<th>Nama Ibu</th>
					<th>Agama Ibu</th>
					<th>Pekerjaan Ibu</th>
					<th>Alamat Orangtua</th>
					<th>Kota Orangtua</th>
					<th>Propinsi Orangtua</th>
					<th>Telepon Orangtua</th>
					<th>Foto</th>
					<th>Status</th>
					<th>Created</th>
					<th>Modified</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Data_Mahasiswa.Mahasiswa.Delete')) : ?>
				<tr>
					<td colspan="32">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('data_mahasiswa_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Data_Mahasiswa.Mahasiswa.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->nim ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Data_Mahasiswa.Mahasiswa.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/mahasiswa/data_mahasiswa/edit/'. $record->nim, '<i class="icon-pencil"></i>'  ); echo "&nbsp;&nbsp;" . $record->nim ?></td>
				<?php else: ?>
				<td><?php echo $record->nim ?></td>
				<?php endif; ?>
				<td><?php echo $record->npm?></td>			
				<td><?php echo $record->nomor_pendaftaran?></td>
				<td><?php echo $record->nomor_pendaftaran_ulang?></td>
				<td><?php echo $record->nama_mahasiswa?></td>
				<td><?php echo $record->tempat_lahir?></td>
				<td><?php echo $record->tanggal_lahir?></td>
				<td><?php echo $record->alamat?></td>
				<td><?php echo $record->kota?></td>
				<td><?php echo $record->propinsi?></td>
				<td><?php echo $record->telepon?></td>
				<td><?php echo $record->jenis_kelamin?></td>
				<td><?php echo $record->agama?></td>
				<td><?php echo $record->golongan_darah?></td>
				<td><?php echo $record->kewarganegaraan?></td>
				<td><?php echo $record->nama_instansi?></td>
				<td><?php echo $record->email?></td>
				<td><?php echo $record->nama_ayah?></td>
				<td><?php echo $record->agama_ayah?></td>
				<td><?php echo $record->pekerjaan_ayah?></td>
				<td><?php echo $record->nama_ibu?></td>
				<td><?php echo $record->agama_ibu?></td>
				<td><?php echo $record->pekerjaan_ibu?></td>
				<td><?php echo $record->alamat_orangtua?></td>
				<td><?php echo $record->kota_orangtua?></td>
				<td><?php echo $record->propinsi_orangtua?></td>
				<td><?php echo $record->telepon_orangtua?></td>
				<td><?php echo "<img src=\"". base_url(). "uploads/foto/mahasiswa/". $record->foto."\" border=\"0\"/>" ?></td>	
				<td><?php echo $record->status?></td>
				<td><?php echo $record->tanggal_add?></td>
				<td><?php echo $record->tanggal_edit?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="32">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
	<?php echo $this->pagination->create_links(); ?>	
</div>