<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-xl mx-auto bg-white shadow-lg rounded-xl p-6 mt-10 ml-64">
    <h2 class="text-2xl font-bold mb-6 text-center">Form Permohonan Surat</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/surat/kirim') ?>" method="post" class="space-y-5">
        <div>
            <label for="nama" class="block mb-1 font-medium">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label for="nik" class="block mb-1 font-medium">NIK</label>
            <input type="text" name="nik" id="nik" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label for="jenis_surat" class="block mb-1 font-medium">Pilih Jenis Surat</label>
            <select name="jenis_surat" id="jenis_surat" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                <option value="">-- Pilih Surat --</option>
                <option value="ktm">Surat Keterangan Tidak Mampu</option>
                <option value="domisili">Surat Keterangan Domisili</option>
                <option value="sku">Surat Keterangan Usaha</option>
                <option value="aktif">Surat Keterangan Sekolah/Kuliah Aktif</option>
                <option value="belum_nikah">Surat Keterangan Belum Menikah</option>
                <option value="skck">Surat Pengantar SKCK</option>
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                Ajukan Surat
            </button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
