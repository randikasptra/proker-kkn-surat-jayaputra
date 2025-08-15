<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow mt-6">
    <h2 class="text-2xl font-semibold mb-4">Form Surat Keterangan Kelahiran</h2>

    <form action="<?= base_url('surat/kelahiran/simpan') ?>" method="post" class="grid grid-cols-2 gap-4">

        <!-- Data Bayi -->
        <h2 class="col-span-2 font-semibold text-lg mt-4">Data Bayi</h2>
        <input type="text" name="nama_bayi" placeholder="Nama Bayi" class="border p-2 rounded" required>
        <select name="jenis_kelamin_bayi" class="border p-2 rounded" required>
            <option value="">-- Jenis Kelamin --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <input type="text" name="tempat_lahir_bayi" placeholder="Tempat Lahir" class="border p-2 rounded" required>
        <input type="date" name="tanggal_lahir_bayi" class="border p-2 rounded" required>
        <input type="time" name="waktu_lahir" class="border p-2 rounded">
        <input type="number" name="anak_ke" placeholder="Anak ke-" class="border p-2 rounded">
        <input type="text" name="berat_badan" placeholder="Berat Badan (kg)" class="border p-2 rounded">
        <input type="text" name="panjang_badan" placeholder="Panjang Badan (cm)" class="border p-2 rounded">

        <!-- Data Ayah -->
        <h2 class="col-span-2 font-semibold text-lg mt-4">Data Ayah</h2>
        <input type="text" name="nama_ayah" placeholder="Nama Ayah" class="border p-2 rounded" required>
        <input type="text" name="tempat_lahir_ayah" placeholder="Tempat Lahir" class="border p-2 rounded" required>
        <input type="date" name="tanggal_lahir_ayah" class="border p-2 rounded" required>
        <input type="text" name="nik_ayah" placeholder="NIK" class="border p-2 rounded" required>
        <input type="text" name="agama_ayah" placeholder="Agama" class="border p-2 rounded" required>
        <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan" class="border p-2 rounded" required>
        <textarea name="alamat_ayah" placeholder="Alamat Ayah" class="border p-2 rounded col-span-2" rows="3" required></textarea>

        <!-- Data Ibu -->
        <h2 class="col-span-2 font-semibold text-lg mt-4">Data Ibu</h2>
        <input type="text" name="nama_ibu" placeholder="Nama Ibu" class="border p-2 rounded" required>
        <input type="text" name="tempat_lahir_ibu" placeholder="Tempat Lahir" class="border p-2 rounded" required>
        <input type="date" name="tanggal_lahir_ibu" class="border p-2 rounded" required>
        <input type="text" name="nik_ibu" placeholder="NIK" class="border p-2 rounded" required>
        <input type="text" name="agama_ibu" placeholder="Agama" class="border p-2 rounded" required>
        <input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan" class="border p-2 rounded" required>
        <textarea name="alamat_ibu" placeholder="Alamat Ibu" class="border p-2 rounded col-span-2" rows="3" required></textarea>

        <!-- Data Pelapor -->
        <h2 class="col-span-2 font-semibold text-lg mt-4">Data Pelapor</h2>
        <input type="text" name="nama_pelapor" placeholder="Nama Pelapor" class="border p-2 rounded" required>
        <input type="text" name="hubungan_bayi" placeholder="Hubungan dengan Bayi" class="border p-2 rounded" required>
        <textarea name="alamat_pelapor" placeholder="Alamat Pelapor" class="border p-2 rounded col-span-2" rows="3" required></textarea>
        <input type="text" name="nik_pelapor" placeholder="NIK Pelapor" class="border p-2 rounded" required>

        <!-- Data Saksi -->
        <h2 class="col-span-2 font-semibold text-lg mt-4">Data Saksi</h2>
        <input type="text" name="nama_saksi1" placeholder="Nama Saksi 1" class="border p-2 rounded" required>
        <input type="text" name="nik_saksi1" placeholder="NIK Saksi 1" class="border p-2 rounded" required>
        <input type="text" name="nama_saksi2" placeholder="Nama Saksi 2" class="border p-2 rounded" required>
        <input type="text" name="nik_saksi2" placeholder="NIK Saksi 2" class="border p-2 rounded" required>

        <!-- Keperluan -->
        <h2 class="col-span-2 font-semibold text-lg mt-4">Keperluan Surat</h2>
        <textarea name="keperluan" placeholder="Keperluan Surat" class="border p-2 rounded col-span-2" rows="3" required></textarea>

        <input type="date" name="tanggal_pengajuan" class="border p-2 rounded col-span-2">

        <div class="col-span-2 mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
