<!DOCTYPE html>
<html>
<head>
    <title>Formulir Permohonan KTP</title>
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

<h3 class="judul-surat">FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP)</h3>
<p class="nomor-surat">Nomor : 470/SS.04./Des-2008/V/2025</p>

<div class="isi">
    <p>Yang bertanda tangan di bawah ini Kepala Desa Jayaputra Kecamatan Sariwangi Kabupaten Tasikmalaya menerangkan bahwa:</p>
    
    <table>
        <tr><td width="40%">Nama Lengkap</td><td>: <?= $ktp['nama'] ?></td></tr>
        <tr><td>Tempat / Tanggal Lahir</td>
            <td>:
                <?php
                $tglLahir = new DateTime($ktp['tanggal_lahir']);
                $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                echo $ktp['tempat_lahir'] . ', ' . $formatter->format($tglLahir);
                ?>
            </td>
        </tr>
        <tr><td>Jenis Kelamin</td><td>: <?= $ktp['jenis_kelamin'] ?></td></tr>
        <tr><td>Agama</td><td>: <?= $ktp['agama'] ?></td></tr>
        <tr><td>Status Perkawinan</td><td>: <?= $ktp['status_perkawinan'] ?></td></tr>
        <tr><td>Golongan Darah</td><td>: <?= $ktp['golongan_darah'] ?></td></tr>
        <tr><td>Pekerjaan</td><td>: <?= $ktp['pekerjaan'] ?></td></tr>
        <tr><td>Alamat Lengkap</td><td>: <?= $ktp['alamat'] ?></td></tr>
        <tr><td>No. KK</td><td>: <?= $ktp['nomor_kk'] ?></td></tr>
        <tr><td>NIK</td><td>: <?= $ktp['nik'] ?></td></tr>
        <tr><td>Kewarganegaraan</td><td>: <?= $ktp['kewarganegaraan'] ?></td></tr>
        <tr><td>Keperluan Surat</td><td>: <?= $ktp['keperluan'] ?></td></tr>
        <tr><td>Jenis Permohonan</td><td>: <?= $ktp['jenis_permohonan'] ?></td></tr>
        <tr><td>Alasan Permohonan</td><td>: <?= $ktp['alasan_permohonan'] ?></td></tr>
    </table>

    <p>Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

    <div class="ttd">
        <?php
        $tglPengajuan = new DateTime($ktp['tanggal_pengajuan']);
        $tanggalIndo = $formatter->format($tglPengajuan);
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
