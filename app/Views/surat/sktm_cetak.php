<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Tidak Mampu</title>
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
    <!-- Logo -->
    <img src="<?= base_url('KabTasik.png') ?>" class="logo" alt="Logo Desa">
    <h3>PEMERINTAH DAERAH KABUPATEN TASIKMALAYA</h3>
    <h3>KECAMATAN SARIWANGI</h3>
    <h2>DESA JAYAPUTRA</h2>
    <p>Jl. Sarangkole, Desa Jayaputra Sariwangi, Kode Pos 46465</p>
    <p>Email: jayaputradesa@gmail.com</p>
</div>

<h3 class="judul-surat">SURAT KETERANGAN TIDAK MAMPU</h3>
<p class="nomor-surat">Nomor : 41/SS.04./Des-2008/V/2025</p>

<div class="isi">
    <p>Yang bertanda tangan di bawah ini Kepala Desa Jayaputra Kecamatan Sariwangi Kabupaten Tasikmalaya menerangkan bahwa:</p>
    
    <table>
        <tr><td width="30%">Nama</td><td>: <?= $sktm['nama'] ?></td></tr>
        <tr><td>NIK</td><td>: <?= $sktm['nik'] ?></td></tr>
        <tr><td>KK</td><td>: <?= $sktm['kk'] ?></td></tr>
        <tr><td>Jenis Kelamin</td><td>: <?= $sktm['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td></tr>
        <tr><td>Tempat/Tgl. Lahir</td><td>: <?= $sktm['tempat_lahir'] ?>, <?= date('d-m-Y', strtotime($sktm['tanggal_lahir'])) ?></td></tr>
        <tr><td>Agama</td><td>: <?= $sktm['agama'] ?></td></tr>
        <tr><td>Status Perkawinan</td><td>: <?= $sktm['status_perkawinan'] ?></td></tr>
        <tr><td>Alamat</td><td>: <?= $sktm['alamat'] ?></td></tr>
        <tr><td>Status Pekerjaan</td><td>: <?= $sktm['status_pekerjaan'] ?></td></tr>
        <tr><td>Desil</td><td>: <?= $sktm['desil'] ?></td></tr>
        <tr><td>Penghasilan</td><td>: <?= $sktm['penghasilan'] ?: '-' ?></td></tr>
    </table>

    <p>Nama tersebut di atas hasil validasi kami ke lapangan benar-benar TIDAK MAMPU, dan Surat Keterangan ini dipergunakan untuk <?= $sktm['keperluan'] ?>.</p>

    <p>Demikian surat keterangan ini kami buat untuk dipergunakan sebagaimana mestinya.</p>

    <div class="ttd">
        <p>Jayaputra, <?= date('d F Y', strtotime($sktm['tanggal_surat'])) ?></p>
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
