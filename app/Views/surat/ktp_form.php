<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow mt-6 ml-96">
    <h2 class="text-2xl font-semibold mb-4">Form Surat Pengantar KTP</h2>

    <form action="<?= base_url('ktp/simpan') ?>" method="post">

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="border w-full p-2 rounded" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label>Agama</label>
                <input type="text" name="agama" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label>Status Perkawinan</label>
                <input type="text" name="status_perkawinan" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label>Golongan Darah</label>
                <input type="text" name="golongan_darah" class="border w-full p-2 rounded">
            </div>
            <div>
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="border w-full p-2 rounded" required>
            </div>
            <div class="col-span-2">
                <label>Alamat Lengkap</label>
                <textarea name="alamat" class="border w-full p-2 rounded" rows="3" required></textarea>
            </div>
            <div>
                <label>Nomor KK</label>
                <input type="text" name="nomor_kk" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label>NIK</label>
                <input type="text" name="nik" class="border w-full p-2 rounded" required>
            </div>
            <div>
                <label>Kewarganegaraan</label>
                <input type="text" name="kewarganegaraan" class="border w-full p-2 rounded" required>
            </div>
            <div class="col-span-2">
                <label>Keperluan Surat</label>
                <textarea name="keperluan" class="border w-full p-2 rounded" rows="2" required></textarea>
            </div>
            <div>
                <label>Jenis Permohonan</label>
                <select name="jenis_permohonan" class="border w-full p-2 rounded" required>
                    <option value="">-- Pilih --</option>
                    <option value="Baru">Baru</option>
                    <option value="Perpanjangan">Perpanjangan</option>
                    <option value="Penggantian">Penggantian (Hilang/Rusak)</option>
                    <option value="Perubahan Data">Perubahan Data</option>
                </select>
            </div>
            <div>
                <label>Alasan Permohonan</label>
                <textarea name="alasan_permohonan" class="border w-full p-2 rounded" rows="2"></textarea>
            </div>
            <div class="col-span-2">
                <label>Dokumen Pendukung</label>
                <textarea name="dokumen_pendukung" class="border w-full p-2 rounded" rows="2"></textarea>
            </div>
            <div>
                <label>Tanggal Pengajuan</label>
                <input type="date" name="tanggal_pengajuan" class="border w-full p-2 rounded">
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
