<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Kelahiran</title>
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

<h3 class="judul-surat">SURAT KETERANGAN KELAHIRAN</h3>
<p class="nomor-surat">Nomor : 474.1/SS.04./Des-2008/V/2025</p>

<div class="isi">
    <?php 
    // Formatter untuk tanggal Indonesia
    $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    ?>

    <p>Yang bertanda tangan di bawah ini Kepala Desa Jayaputra Kecamatan Sariwangi Kabupaten Tasikmalaya menerangkan bahwa pada:</p>

    <table>
        <tr><td>Nama Bayi</td><td>: <?= $kelahiran['nama_bayi'] ?></td></tr>
        <tr><td>Jenis Kelamin</td><td>: <?= $kelahiran['jenis_kelamin_bayi'] ?></td></tr>
        <tr><td>Tempat/Tgl Lahir</td>
            <td>: <?= $kelahiran['tempat_lahir_bayi'] ?>, <?= $formatter->format(new DateTime($kelahiran['tanggal_lahir_bayi'])) ?></td></tr>
        <tr><td>Waktu Lahir</td><td>: <?= $kelahiran['waktu_lahir'] ?></td></tr>
        <tr><td>Anak ke-</td><td>: <?= $kelahiran['anak_ke'] ?></td></tr>
        <tr><td>Berat/Panjang</td><td>: <?= $kelahiran['berat_badan'] ?> kg / <?= $kelahiran['panjang_badan'] ?> cm</td></tr>
    </table>

    <p>Telah lahir dari pasangan:</p>

    <p><b>Ayah</b></p>
    <table>
        <tr><td>Nama</td><td>: <?= $kelahiran['nama_ayah'] ?></td></tr>
        <tr><td>Tempat/Tgl Lahir</td>
            <td>: <?= $kelahiran['tempat_lahir_ayah'] ?>, <?= $formatter->format(new DateTime($kelahiran['tanggal_lahir_ayah'])) ?></td></tr>
        <tr><td>NIK</td><td>: <?= $kelahiran['nik_ayah'] ?></td></tr>
        <tr><td>Agama</td><td>: <?= $kelahiran['agama_ayah'] ?></td></tr>
        <tr><td>Pekerjaan</td><td>: <?= $kelahiran['pekerjaan_ayah'] ?></td></tr>
        <tr><td>Alamat</td><td>: <?= $kelahiran['alamat_ayah'] ?></td></tr>
    </table>

    <p><b>Ibu</b></p>
    <table>
        <tr><td>Nama</td><td>: <?= $kelahiran['nama_ibu'] ?></td></tr>
        <tr><td>Tempat/Tgl Lahir</td>
            <td>: <?= $kelahiran['tempat_lahir_ibu'] ?>, <?= $formatter->format(new DateTime($kelahiran['tanggal_lahir_ibu'])) ?></td></tr>
        <tr><td>NIK</td><td>: <?= $kelahiran['nik_ibu'] ?></td></tr>
        <tr><td>Agama</td><td>: <?= $kelahiran['agama_ibu'] ?></td></tr>
        <tr><td>Pekerjaan</td><td>: <?= $kelahiran['pekerjaan_ibu'] ?></td></tr>
        <tr><td>Alamat</td><td>: <?= $kelahiran['alamat_ibu'] ?></td></tr>
    </table>

    <p><b>Pelapor</b></p>
    <table>
        <tr><td>Nama</td><td>: <?= $kelahiran['nama_pelapor'] ?></td></tr>
        <tr><td>Hubungan</td><td>: <?= $kelahiran['hubungan_bayi'] ?></td></tr>
        <tr><td>Alamat</td><td>: <?= $kelahiran['alamat_pelapor'] ?></td></tr>
        <tr><td>NIK</td><td>: <?= $kelahiran['nik_pelapor'] ?></td></tr>
    </table>

    <p><b>Saksi</b></p>
    <table>
        <tr><td>Nama Saksi 1</td><td>: <?= $kelahiran['nama_saksi1'] ?> (<?= $kelahiran['nik_saksi1'] ?>)</td></tr>
        <tr><td>Nama Saksi 2</td><td>: <?= $kelahiran['nama_saksi2'] ?> (<?= $kelahiran['nik_saksi2'] ?>)</td></tr>
    </table>

    <p>Surat keterangan ini dibuat untuk keperluan: <?= $kelahiran['keperluan'] ?>.</p>
    <p>Demikian surat ini dibuat untuk digunakan sebagaimana mestinya.</p>

    <div class="ttd">
        <p>Jayaputra, <?= $formatter->format(new DateTime($kelahiran['tanggal_pengajuan'])) ?></p>
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
