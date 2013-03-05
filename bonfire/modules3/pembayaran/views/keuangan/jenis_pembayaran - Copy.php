 <div class="well">
            <legend>Pilih Data Pembayaran</legend>
            <?php
        if(!empty($data)){
            echo "<table cellpadding='2px'>";
            foreach ($data as $row)
            {
                ?> 
                <tr>
                <td style='padding-right:50px;'>
                    <label class="checkbox">
                    <input style="margin-left: 10px;" name="kode_jenis_pembayaran[]" type="checkbox" value=" <?php echo $row->kode_jenis_pembayaran; ?>" /> 
                    <?php   echo $row->jenis_pembayaran ?>
                    </label> 
                </td>       
                <td style= "padding-left: 100px;">
                <div class="input-prepend">
                    <span class="add-on">Rp.</span><input class=span2 style="text-align: right;"  value=" <?php echo number_format($row->jumlah,0,".",",") ?> " id="jumlah" type="text" onkeyup="formatNumber(this);" onchange="formatNumber(this);" name="jumlah[]"/>
                </td>
                    </div> 
                </tr>
                
        <?php 
            } ?>
            <tr>
                    <td colspan="2" >
                    <label style="margin-left:30px;" class="code">Keterangan ::</label> 
                        <textarea class="span10" style="margin-left:30px;"></textarea>
                    </td>
                </tr>
                    
            <?php echo "</table>";
        }
        
       $kosong = array(
                        "" => "Tidak Jenis Pembayaran",
        );
        ?>
        
        </div>