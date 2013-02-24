<script type='text/javascript'> 
    function CentangAll()
    {
        var statusAll=$(".check-all");
        var check=statusAll.attr('checked');
        if (check){
            $('.menu').attr('checked',true);
        }else{
            $('.menu').attr('checked',false);
        }
    }
</script>

<div class="well">
<legend>Mata Kuliah Prasyarat</legend>
<?php echo form_open(SITE_AREA .'/jurusan/matakuliah_prasyarat'); ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th class="column-check"><input class="check-all" onClick="CentangAll()" type="checkbox" /></th>
			<th>Kode Matakuliah</th>
			<th>Nama Matakuliah</th>
			<th>SKS Teori</th>
            <th>SKS Praktek</th>
            <th>SKS SKS Praktikum</th>
		</tr>
	</thead>
	<tbody>
        <?php foreach($syarat as $row) : ?>
        <tr>			
         <!--   <td><input type="checkbox" name="checked[]" class="menu" value="" /></td> -->
            <?php if ($this->auth->has_permission('Matakuliah_Prasyarat.Jurusan.Delete')) : ?>
					<td><input class="menu" type="checkbox" name="checked[]" value="<?php echo $row->kode_matakuliah_prasyarat ?>" /></td>
					<?php endif;?>
            <td><?php echo $row->kode_matakuliah; ?></td>
            <td><?php echo $row->nama_matakuliah; ?></td>
            <td><?php echo $row->sks_teori; ?></td>
            <td><?php echo $row->sks_praktek; ?></td>
            <td><?php echo $row->sks_praktikum; ?></td>
        </tr>		
        <?php endforeach; ?>
	</tbody>
    <tfoot>
		<tr>
			<td colspan="6">
				<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo "Anda akan hapus prasysarat ini ?"; ?>')">
			</td>
		</tr>
		
	</tfoot>
</table>
</form>
</div>