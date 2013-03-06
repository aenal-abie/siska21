<script type="text/javascript">
$( "#tanggal_dispensasi" ).datepicker({
    changeMonth: true,
    numberOfMonths: 1,
    dateFormat: 'yy-mm-dd',
    onClose: function( selectedDate ) {
    $( "#batas_pembayaran" ).datepicker( "option", "minDate", selectedDate );
}
});

$( "#batas_pembayaran" ).datepicker({
    changeMonth: true,
    numberOfMonths: 2,
    maxDate: "1M-1D",
    dateFormat: 'yy-mm-dd',
    onClose: function( selectedDate ) {
        $( "#tanggal_dispensasi" ).datepicker( "option", "maxDate", selectedDate );
    }
});

$(this).ready( function() {
    $('#dispensasi').hide();
    $('#dispensasi_show').change(function(){
        $('#dispensasi').show();
            
    })
    $('#dispensasi_hide').change(function(){
        $('#dispensasi').hide();
    }
})
</script>
<table class="table table-striped  ">
<tr>
    <th class="span10">Keterangan</th>
    <th class="span2">Jumlah</th>
</tr>
<tr class="success">
    <td class="span10 ">Jumlah Pembayaran </td>
    <td class="span2"><?php (is_array($jumlah)? $nilai1=$jumlah['0']:$nilai1=$jumlah ); echo number_format($nilai1,0,'.',','); ?></td>
</tr>
<tr>
    <td>Denda</td>
    <td><?php (is_array($jumlah)? $nilai2=$jumlah['1']:$nilai2=0 ); echo number_format($nilai2,0,'.',','); ?></td>
</tr>
<tr>
    <td>Total Pembayaran</td>
    <td><h4><?php $total=$nilai1+$nilai2; echo number_format($total,0,'',','); ?></h4></td>
</tr>
</table>

<div class="row-fluid">
<h4>Status Pembayaran</h4>
<div class="span1">
<div class="control-group">
    <div class='controls'> 
        
        <label class="radio">
            <input id="dispensasi_hide" type="radio" name="status_pembayaran"  value="L" checked="checked" />Lunas
        </label>
        
        </div>
    </div>
</div>
<div class="span10"><div class="control-group">
    <div class='controls'>   
        <label class="radio">
            <input id="dispensasi_show" type="radio" name="status_pembayaran"  value="D"/>Dispensasi
        </label>
        <div id="dispensasi" class="row-fluid">
            <div class="span4">
            <label class="control-label" for="inputEmail">Tanggal Dispensasi</label>
            <div class="controls">
            <input type="text" name="tanggal_dispensasi" id="tanggal_dispensasi" placeholder="Tanggal Dispensasi">
            </div>
            </div>
            <div class="span4">
            <label class="control-label" for="inputEmail">Batas Akhir Pembayaran</label>
            <div class="controls">
            <input type="text" name="tanggal_jatuh_tempo" id="batas_pembayaran" placeholder="Batas Akhir Pembayaran">
            </div>
            </div>
    </div>
</div>
</div>
</div>

