<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow mt-6 ">
    <h2 class="text-2xl font-semibold mb-4">Form Surat SKTM</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

   <form action="<?= base_url('surat-sktm/simpan') ?>" method="post" class="space-y-4">

    <!-- Nama -->
    <div>
        <label class="block font-medium">Nama</label>
        <input type="text" name="nama" class="border w-full p-2 rounded" required>
    </div>

    <!-- NIK -->
    <div>
        <label class="block font-medium">NIK</label>
        <input type="text" name="nik" class="border w-full p-2 rounded" required>
    </div>

    <!-- KK -->
    <div>
        <label class="block font-medium">No. KK</label>
        <input type="text" name="kk" class="border w-full p-2 rounded" required>
    </div>

    <!-- Jenis Kelamin -->
    <div>
        <label class="block font-medium">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="border w-full p-2 rounded" required>
            <option value="">-- Pilih --</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>

    <!-- Tempat dan Tanggal Lahir -->
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block font-medium">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="border w-full p-2 rounded" required>
        </div>
        <div>
            <label class="block font-medium">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="border w-full p-2 rounded" required>
        </div>
    </div>

    <!-- Agama -->
    <div>
        <label class="block font-medium">Agama</label>
        <input type="text" name="agama" class="border w-full p-2 rounded" required>
    </div>

    <!-- Status Perkawinan -->
    <div>
        <label class="block font-medium">Status Perkawinan</label>
        <select name="status_perkawinan" class="border w-full p-2 rounded" required>
            <option value="">-- Pilih --</option>
            <option value="Kawin">Kawin</option>
            <option value="Belum Kawin">Belum Kawin</option>
            <option value="Cerai Hidup">Cerai Hidup</option>
            <option value="Cerai Mati">Cerai Mati</option>
        </select>
    </div>

    <!-- Alamat -->
    <div>
        <label class="block font-medium">Alamat</label>
        <textarea name="alamat" rows="3" class="border w-full p-2 rounded" required></textarea>
    </div>

    <!-- Status Pekerjaan -->
    <div>
        <label class="block font-medium">Status Pekerjaan</label>
        <input type="text" name="status_pekerjaan" class="border w-full p-2 rounded" required>
    </div>

    <!-- Desil -->
    <div>
        <label class="block font-medium">Desil</label>
        <input type="text" name="desil" class="border w-full p-2 rounded" required>
    </div>

    <!-- Penghasilan -->
    <div>
        <label class="block font-medium">Penghasilan</label>
        <input type="number" name="penghasilan" class="border w-full p-2 rounded">
    </div>

    <!-- Keperluan -->
    <div>
        <label class="block font-medium">Keperluan</label>
        <textarea name="keperluan" rows="3" class="border w-full p-2 rounded" required></textarea>
    </div>

    <!-- Tombol -->
    <div class="flex gap-4">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </div>
</form>

</div>
<?= $this->endSection() ?>
