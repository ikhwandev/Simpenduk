<style type="text/css">
@media print and (width: 21cm) and (height: 29.7cm) {
    @page {
        margin: 1cm;
    }
}

.tabelku {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 2px;
}
</style>
<style type="text/css" media="print">
@page {
    size: portrait;
}
</style>
<img src="<?php echo base_url('assets/images/kop-surat.png'); ?>" width="100%" height="20%">
<br /><br /><br />
<center>
    <font size="5"><u><b>SURAT KETERANGAN SKCK</b></u></font><br />Nomor:
    470/<?php echo $skck->id_skck; ?>/DS/<?php echo substr($skck->tanggal_skck, 0, 4); ?>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertandatangan di bawah ini , <?php echo $skck->jabatan_pejabat; ?> Suci Kecamatan Manyar
    Kabupaten Gresik Provinsi Jawa Timur
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $skck->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $skck->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $skck->tempat_lahir; ?> <?= date('d F Y', strtotime($skck->tanggal_lahir)); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $skck->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?php echo $skck->status_perkawinan; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $skck->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $skck->alamat; ?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Menurut</td>
        <td>:</td>
        <td>Orang tersebut diatas, adalah benar-benar warga kami dan berkelakuan baik di masyarakat. Surat keterangan ini dibuat untuk keperluan pengurusan SKCK sebagai kelengkapan berkas lamaran pekerjaan.

            Demikian surat keterangan ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.</td>
    </tr>
</table>
<br />
<font align="justify">
    Demikian Surat Keterangan SKCK dibuat dengan sebenarnya, untuk dapat dipergunakan sesuai keperluannya serta agar
    yang berkepentingan menjadi maklum.<br /><br /><br /><br /><br /><br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Suci, <?= date('d F Y', strtotime($skck->tanggal_skck)); ?></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>Kepala Desa Suci</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center><b><u><?php echo $skck->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
    </tr>
</table>
<script>
window.print();
</script>