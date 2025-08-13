<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan Tidak Mampu</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .kop { text-align: center; border-bottom: 2px solid black; padding-bottom: 10px; margin-bottom: 20px; }
        .kop h1 { margin: 0; }
        .isi { line-height: 1.8; }
    </style>
</head>
<body>

<div class="kop">
    <h1>PEMERINTAH DESA CONTOH</h1>
    <p>Jl. Raya Desa No. 123, Kecamatan Contoh, Kabupaten Contoh</p>
</div>

<div class="isi">
    <h3 style="text-align: center;">SURAT KETERANGAN TIDAK MAMPU</h3>

    <p>Yang bertanda tangan di bawah ini Kepala Desa Contoh menerangkan bahwa:</p>
    <p>Nama: <?= $sktm['nama'] ?></p>
    <p>Alamat: <?= $sktm['alamat'] ?></p>

    <p>Benar bahwa orang tersebut termasuk keluarga yang kurang mampu. Surat keterangan ini dibuat untuk keperluan:</p>
    <p><?= $sktm['keperluan'] ?></p>

    <br><br>
    <p style="text-align: right;">Contoh, <?= date('d F Y') ?></p>
    <p style="text-align: right;">Kepala Desa</p>
    <br><br>
    <p style="text-align: right;"><b>Nama Kepala Desa</b></p>
</div>

<script>
    window.print();
</script>

</body>
</html>
