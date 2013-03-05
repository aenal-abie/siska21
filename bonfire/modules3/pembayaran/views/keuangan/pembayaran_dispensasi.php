<div class="well-small">
<?php echo form_open($this->uri->uri_string()); ?>
<table class="table ">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Pembayaran</th>
                    <th>Jumlah</th>
                    <th>Tanggal Dispensasi</th>
                    <th>Tanggal Jatuh Tempo</th>
                    <th>Tanggal Pelunasan</th>
				</tr>
			</thead>
			<tbody>
			
			
				<tr>
				<td><?php echo $record->nim ?></td>

			
				<td><?php echo $record->nama_mahasiswa?></td>
				<td><?php echo $record->jenis_pembayaran?></td>
                <td><?php echo number_format($record->jumlah,0,'',',')?></td>
                <td><?php echo $record->tanggal_dispensasi?></td>
                <td><?php echo $record->tanggal_jatuh_tempo;?></td>
                <td><input type="text" id="tanggal_pembayaran" class="span2" name="tanggal_pembayaran" value="<?php echo date('Y-m-d') ?>" />  
                <label class="checkbox">
                <input id="denda" type="checkbox" value="D" /> Bayar Denda
                </label></td>
				</tr>
            </tr>
			</tbody>
		</table>
        
        <div class="form-actions">
            <input type="submit" name="save" class="btn btn-primary" value="Simpan Pelunasan" />
             <?php echo anchor(SITE_AREA .'/keuangan/pembayaran/', 'Batal', 'class="btn btn-warning"'); ?>
        
            
        </div>
        </form>
        </div>
        
        