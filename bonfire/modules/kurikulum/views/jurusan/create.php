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
<?php echo form_open(base_url().SITE_AREA.'/jurusan/kurikulum/save_kurikulum', 'class="form-horizontal"'); ?>
    
        
        <legend>Pilih Mata Kuliah</legend>
        <input type="hidden" name="kode_nama_kurikulum" value="<?php echo $kode_nama_kurikulum ?>" /> 
        
	<table class="table table-striped">
			<tfoot>
            <tr>
                <th><label class="checkbox">
                <input name="check-all" class="check-all" onclick="CentangAll()" type="checkbox" value="" /> <span>Pilih Semua</span>
                </label>
                </th>
            </tr>
            </tfoot>
			<tbody>
			<?php foreach($data_mk as $row) : ?>
				<tr>
				<td><label class="checkbox">
                    <input name="kode_matakuliah[]" class="menu" type="checkbox" value="<?php echo $row->kode_matakuliah ?>">
                    <?php echo $row->kode_matakuliah." :: ".$row -> nama_matakuliah; ?>
                    </label>
                </td>
				</tr>
			<?php endforeach; ?>
			
			</tbody>
		</table>

<div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create Kurikulum" />
            or <?php echo anchor(SITE_AREA .'/jurusan/nama_kurikulum', lang('kurikulum_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>

     <?php echo form_close(); ?>
       
</div>
