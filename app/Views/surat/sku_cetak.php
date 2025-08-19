<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Usaha</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .kop { text-align: center; border-bottom: 3px solid black; padding-bottom: 10px; margin-bottom: 20px; position: relative; }
        .kop img.logo { position: absolute; left: 0; top: 10px; width: 80px; height: auto; }
        .kop h2, .kop h3, .kop h4 { margin: 0; }
        .kop p { margin: 0; font-size: 14px; }
        .judul-surat { text-align: center; text-decoration: underline; font-size: 16px; margin-top: 20px; }
        .nomor-surat { text-align: center; margin-bottom: 20px; }
        .isi { line-height: 1.8; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        td { vertical-align: top; padding: 2px 5px; }
        .ttd { margin-top: 40px; text-align: right; }
    </style>
</head>
<body>

<div class="kop">
    <img src="<?= base_url('KabTasik.png') ?>" class="logo" alt="Logo Desa">
    <h3>PEMERINTAH DAERAH KABUPATEN TASIKMALAYA</h3>
    <h3>KECAMATAN SARIWANGI</h3>
    <h2>DESA JAYAPUTRA</h2>
    <p>Jl. Sarangkole, Desa Jayaputra Sariwangi, Kode Pos 46465</p>
    <p>Email: jayaputradesa@gmail.com</p>
</div>

<h3 class="judul-surat">SURAT KETERANGAN USAHA</h3>
<p class="nomor-surat">Nomor :510/SS.04./Des-2008/V/2025</p>

<div class="isi">
    <p>Yang bertanda tangan di bawah ini Kepala Desa Jayaputra Kecamatan Sariwangi Kabupaten Tasikmalaya menerangkan bahwa:</p>
    
    <table>
        <tr><td width="35%">Nama</td><td>: <?= $sku['nama'] ?></td></tr>
        <tr><td>Tempat/Tanggal Lahir</td><td>: <?= $sku['tempat_lahir'] ?>, <?= date('d-m-Y', strtotime($sku['tanggal_lahir'])) ?></td></tr>
        <tr><td>Jenis Kelamin</td><td>: <?= $sku['jenis_kelamin'] ?></td></tr>
        <tr><td>Agama</td><td>: <?= $sku['agama'] ?></td></tr>
        <tr><td>Status Perkawinan</td><td>: <?= $sku['status_perkawinan'] ?></td></tr>
        <tr><td>Pekerjaan</td><td>: <?= $sku['pekerjaan'] ?></td></tr>
        <tr><td>Alamat KTP</td><td>: <?= $sku['alamat_ktp'] ?></td></tr>
        <tr><td>NIK</td><td>: <?= $sku['nik'] ?></td></tr>
        <tr><td>Nomor KK</td><td>: <?= $sku['nomor_kk'] ?></td></tr>
    </table>

    <p>Benar yang bersangkutan memiliki usaha dengan keterangan sebagai berikut:</p>

    <table>
        <tr><td width="35%">Nama Usaha</td><td>: <?= $sku['nama_usaha'] ?></td></tr>
        <tr><td>Jenis Usaha</td><td>: <?= $sku['jenis_usaha'] ?></td></tr>
        <tr><td>Alamat Usaha</td><td>: <?= $sku['alamat_usaha'] ?></td></tr>
        <tr><td>Lama Berdiri Usaha</td><td>: <?= $sku['lama_berdiri'] ?></td></tr>
        <tr><td>Skala Usaha</td><td>: <?= $sku['skala_usaha'] ?></td></tr>
        <tr><td>Jumlah Karyawan</td><td>: <?= $sku['jumlah_karyawan'] ?: '-' ?></td></tr>
    </table>

    <p>Surat Keterangan Usaha ini dibuat untuk keperluan <b><?= $sku['keperluan'] ?></b>.</p>

    <p>Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

   <div class="ttd">
    <?php
    $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    $tanggalIndo = $formatter->format(new DateTime($sku['tanggal_pengajuan']));
    ?>
    <p>Jayaputra, <?= $tanggalIndo ?></p>
    <p>Kepala Desa Jayaputra</p>
    <br><br>
    <p><b>(_________________________)</b></p>
</div>

</div>

<script>
    window.print();
</script>

</body>
</html>
