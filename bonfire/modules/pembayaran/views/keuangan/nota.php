<style>
    *{
     font-family:  "Courier New";
	 font-size:12pt;
	 letter-spacing: 3pt;
    }
    .border
    {
        border-collapse: collapse;
	border-bottom: 1px dotted #000;   
    }
    .rata_kanan
    {
        text-align: right;    
    }
    
</style>

<!--
<body onload="javascript:window.print();" onclick="javascript:window.close();" onmouseover="javascript:window.close();"></body>
-->
<div style="width: 700px;">
<img src="<?php echo base_url('ok.gif') ?>" />
SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER

    <table>
        <tr>
            <td style="text-align: center;" colspan="3">
        </tr>
    </table>
    <br /><br />
    <table>
        <tr>
            <td style="width: 250px;">Tahun Akademik</td>
            <td>:</td>
            <td><?php echo $records->tahun_akademik?></td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>:</td>
            <td><?php echo($records->tahun_akademik==0) ? "Genap" : "Ganjil"; ?></td>
        </tr>
        <tr>
            <td>Sudah Terima Dari</td>
            <td>:</td>
            <td><?php echo $records->nama_mahasiswa?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?php echo $records->nim?></td>
        </tr>
        <tr>
            <td style="vertical-align: text-top;">Untuk Pembayaran</td>
            <td style="vertical-align: text-top;">:</td>
            <td ></td>
        </tr>
    </table>
    <table>
        <tr>
            <td style="width: 400px;"><span style="margin-left: 50px;"><?php echo $records->jenis_pembayaran; ?></span></td>
            <td class="rata_kanan">Rp. <?php echo number_format($records->jumlah,2,'.',','); ?> </td>
        </tr>
    <?php 
    $jumlah=$records->jumlah; $denda=0 ;
    if($records->status_denda=='D') { ?> 
    <tr>
        <td><span style="margin-left: 50px;">Denda <?php echo $records->jenis_pembayaran; $denda = ($records->prosentase_denda * $jumlah)/100; ?></span></td>
        <td class="rata_kanan">Rp. <?php echo number_format($denda,2,'.',','); ?></td>
    </tr>
    <?php } ?>
    <tr >
        <td>Total Pembayaran</td>
        <td class="rata_kanan">Rp. <?php echo number_format($total= $jumlah+$denda,2,'.',','); ?></td>
    </tr>
    <tr>
            <td colspan="2"><br />Terbilang 
            <span class="border" style="margin-left: 30px;">#<?php echo ucwords(to_word($total). " rupiah"); ?> #</span></td>
        </tr>
    </table>
    </div>