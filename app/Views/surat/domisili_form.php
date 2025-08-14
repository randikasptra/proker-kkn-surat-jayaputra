<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow mt-6">
    <h2 class="text-2xl font-semibold mb-4">Form Surat Domisili</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('surat-domisili/simpan') ?>" method="post">

        <!-- Nama -->
        <div class="mb-4">
            <label class="block font-medium">Nama</label>
            <input type="text" name="nama" class="border w-full p-2 rounded" required>
        </div>

        <!-- Tempat dan Tanggal Lahir -->
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block font-medium">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="border w-full p-2 rounded" required>
            </div>
        </div>

        <!-- Jenis Kelamin -->
        <div class="mb-4">
            <label class="block font-medium">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="border w-full p-2 rounded" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <!-- Agama -->
        <div class="mb-4">
            <label class="block font-medium">Agama</label>
            <input type="text" name="agama" class="border w-full p-2 rounded" required>
        </div>

        <!-- Pekerjaan -->
        <div class="mb-4">
            <label class="block font-medium">Pekerjaan</label>
            <input type="text" name="pekerjaan" class="border w-full p-2 rounded" required>
        </div>

        <!-- Alamat -->
        <div class="mb-4">
            <label class="block font-medium">Alamat</label>
            <textarea name="alamat" rows="3" class="border w-full p-2 rounded" required></textarea>
        </div>

        <!-- RT dan RW -->
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block font-medium">RT</label>
                <input type="text" name="rt" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label class="block font-medium">RW</label>
                <input type="text" name="rw" class="border w-full p-2 rounded" required>
            </div>
        </div>

        <!-- Keperluan -->
        <div class="mb-4">
            <label class="block font-medium">Keperluan</label>
            <textarea name="keperluan" rows="3" class="border w-full p-2 rounded" required></textarea>
        </div>

        <!-- Tanggal Pengajuan -->
        <div class="mb-4">
            <label class="block font-medium">Tanggal Pengajuan</label>
            <input type="date" name="tanggal_pengajuan" class="border w-full p-2 rounded">
        </div>

        <!-- Tombol -->
        <div class="flex gap-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
