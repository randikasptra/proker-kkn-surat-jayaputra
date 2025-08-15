<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="max-w-5xl mx-auto mt-10 px-4 ml-64">
    <div class="bg-white shadow rounded-xl p-6">
        <h1 class="text-2xl font-bold mb-6">Form Surat Keterangan Usaha</h1>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="bg-green-100 text-green-800 p-3 mb-4 rounded">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('sku/simpan') ?>" method="post" class="grid grid-cols-2 gap-4">

            <!-- Data Pemohon -->
            <h2 class="col-span-2 font-semibold text-lg mt-4">Data Pemohon</h2>
            <input type="text" name="nama" placeholder="Nama Lengkap" class="border p-2 rounded" required>
            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="border p-2 rounded" required>
            <input type="date" name="tanggal_lahir" class="border p-2 rounded" required>
            <select name="jenis_kelamin" class="border p-2 rounded" required>
                <option value="">-- Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <input type="text" name="agama" placeholder="Agama" class="border p-2 rounded" required>
            <input type="text" name="status_perkawinan" placeholder="Status Perkawinan" class="border p-2 rounded" required>
            <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="border p-2 rounded" required>
            <textarea name="alamat_ktp" placeholder="Alamat sesuai KTP" class="border p-2 rounded col-span-2" rows="3" required></textarea>
            <input type="text" name="nik" placeholder="NIK" class="border p-2 rounded" required>
            <input type="text" name="nomor_kk" placeholder="Nomor KK" class="border p-2 rounded" required>

            <!-- Data Usaha -->
            <h2 class="col-span-2 font-semibold text-lg mt-4">Data Usaha</h2>
            <input type="text" name="nama_usaha" placeholder="Nama Usaha" class="border p-2 rounded" required>
            <input type="text" name="jenis_usaha" placeholder="Jenis Usaha" class="border p-2 rounded" required>
            <textarea name="alamat_usaha" placeholder="Alamat Usaha" class="border p-2 rounded col-span-2" rows="3" required></textarea>
            <input type="text" name="lama_berdiri" placeholder="Lama Berdiri Usaha" class="border p-2 rounded" required>
            <select name="skala_usaha" class="border p-2 rounded" required>
                <option value="">-- Skala Usaha --</option>
                <option value="Mikro">Mikro</option>
                <option value="Kecil">Kecil</option>
                <option value="Menengah">Menengah</option>
            </select>
            <input type="number" name="jumlah_karyawan" placeholder="Jumlah Karyawan" class="border p-2 rounded">

            <!-- Keperluan -->
            <h2 class="col-span-2 font-semibold text-lg mt-4">Keperluan Surat</h2>
            <textarea name="keperluan" placeholder="Untuk keperluan apa SKU dibuat" class="border p-2 rounded col-span-2" rows="3" required></textarea>

            <input type="date" name="tanggal_pengajuan" class="border p-2 rounded col-span-2">

            <div class="col-span-2 mt-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
