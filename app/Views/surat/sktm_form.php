<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-2xl mx-auto bg-white shadow-lg rounded-xl p-6 mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">Form Surat Keterangan Tidak Mampu (SKTM)</h2>

    <form action="<?= base_url('/surat/simpan/sktm') ?>" method="post" class="space-y-5">
        
        <div>
            <label class="block mb-1 font-medium">Nama Lengkap</label>
            <input type="text" name="nama" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label class="block mb-1 font-medium">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label class="block mb-1 font-medium">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label class="block mb-1 font-medium">Jenis Kelamin</label>
            <select name="jenis_kelamin" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 font-medium">NIK</label>
            <input type="text" name="nik" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label class="block mb-1 font-medium">Alamat</label>
            <textarea name="alamat" required class="w-full px-4 py-2 border border-gray-300 rounded-lg"></textarea>
        </div>

        <div>
            <label class="block mb-1 font-medium">Keperluan</label>
            <textarea name="keperluan" required class="w-full px-4 py-2 border border-gray-300 rounded-lg"></textarea>
        </div>

        <div>
            <label class="block mb-1 font-medium">Tanggal Surat</label>
            <input type="date" name="tanggal_surat" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                Simpan & Cetak
            </button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
