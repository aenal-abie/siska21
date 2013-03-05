<script type='text/javascript'> 
$(this).ready( function() {
    $('.check-all').click(function){
        $('.menu').attr('checked',this.checked);   
    });    
});
   
</script>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Pembayaran</th>
                    <th>Jumlah</th>
                    <th>Tahun Akademik</th>
                    <th>Semester</th>
                     <th>Status</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Delete')) : ?>
				<tr>
					<td colspan="8">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('pembayaran_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" class="menu" value="<?php echo $record->kode_pembayaran ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Pembayaran.Keuangan.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/keuangan/pembayaran/edit/'. $record->kode_pembayaran, '<i class="icon-edit"></i>'  ); echo "&nbsp;&nbsp;" . $record->nim ?></td>
				<?php else: ?>
				<td><?php echo $record->nim ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->nama_mahasiswa?></td>
				<td><?php echo $record->jenis_pembayaran?></td>
                <td><?php echo $record->jumlah?></td>
                <td><?php echo $record->tahun_akademik?></td>
                <td><?php echo ($record->semester=='0') ? "Genap" :"Ganjil"; ?></td>
                <td>
                <?php 
                    $jenis = array('L'=>'Lunas', 'D'=>'Dispensasi','LD'=>'Lunas Dispensasi');
                    $link_bayar_dispen = "<a style='margin-top:-3px;' class='btn btn-small btn-warning' href='".base_url(SITE_AREA."/keuangan/pembayaran/pembayaran_dispensasi/$record->kode_pembayaran")."'><i class=\"icon-share\"></i> ".$jenis[$record->status_pembayaran]."</a>"; 
                    echo ($record->status_pembayaran != 'D') ? $jenis[$record->status_pembayaran] 
                           :$link_bayar_dispen; 
                ?>
                </td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="7">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>