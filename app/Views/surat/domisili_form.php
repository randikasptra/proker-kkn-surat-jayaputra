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
        <div class="mb-4">
            <label class="block font-medium">Alamat</label>
            <input type="text" name="alamat" class="border w-full p-2 rounded" required>
        </div>

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

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block font-medium">Desa</label>
                <input type="text" name="desa" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Kecamatan</label>
                <input type="text" name="kecamatan" class="border w-full p-2 rounded" required>
            </div>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Kabupaten</label>
            <input type="text" name="kabupaten" class="border w-full p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Tanggal Surat</label>
            <input type="date" name="tanggal_surat" class="border w-full p-2 rounded" required>
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
