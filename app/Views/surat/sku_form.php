<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="max-w-5xl mx-auto mt-10 px-4 ml-64">
    <div class="bg-white shadow-lg rounded-xl p-6">
        <div class="flex items-center mb-6">
            <i class="fas fa-file-alt text-blue-600 text-3xl mr-3"></i>
            <h1 class="text-2xl font-bold text-gray-800">Form Surat Keterangan Tidak Mampu (SKTM)</h1>
        </div>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('surat-sktm/simpan') ?>" method="post" class="grid grid-cols-2 gap-6">

            <!-- Data Pemohon -->
            <div class="col-span-2 flex items-center mt-4 border-b pb-2">
                <i class="fas fa-user-circle text-blue-500 mr-2"></i>
                <h2 class="font-semibold text-lg text-gray-700">Data Pemohon</h2>
            </div>

            <!-- Nama -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-user"></i>
                </div>
                <input type="text" name="nama" placeholder="Nama Lengkap" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>

            <!-- NIK -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-id-card"></i>
                </div>
                <input type="text" name="nik" placeholder="NIK" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>

            <!-- KK -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-users"></i>
                </div>
                <input type="text" name="kk" placeholder="Nomor KK" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>

            <!-- Jenis Kelamin -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-venus-mars"></i>
                </div>
                <select name="jenis_kelamin" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    <option value="">-- Jenis Kelamin --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <!-- Tempat Lahir -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>

            <!-- Tanggal Lahir -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-calendar-day"></i>
                </div>
                <input type="date" name="tanggal_lahir" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>

            <!-- Agama -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-pray"></i>
                </div>
                <input type="text" name="agama" placeholder="Agama" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>

            <!-- Status Perkawinan -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-heart"></i>
                </div>
                <select name="status_perkawinan" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    <option value="">-- Status Perkawinan --</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Cerai Hidup">Cerai Hidup</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                </select>
            </div>

            <!-- Alamat -->
            <div class="relative col-span-2">
                <div class="absolute top-3 left-3 text-gray-400">
                    <i class="fas fa-home"></i>
                </div>
                <textarea name="alamat" placeholder="Alamat" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" required></textarea>
            </div>

            <!-- Status Pekerjaan -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-briefcase"></i>
                </div>
                <input type="text" name="status_pekerjaan" placeholder="Status Pekerjaan" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>

            <!-- Desil -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-layer-group"></i>
                </div>
                <input type="text" name="desil" placeholder="Desil" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
            </div>

            <!-- Penghasilan -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <i class="fas fa-wallet"></i>
                </div>
                <input type="number" name="penghasilan" placeholder="Penghasilan" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <!-- Keperluan -->
            <div class="relative col-span-2">
                <div class="absolute top-3 left-3 text-gray-400">
                    <i class="fas fa-info-circle"></i>
                </div>
                <textarea name="keperluan" placeholder="Keperluan" 
                    class="pl-10 w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="3" required></textarea>
            </div>

            <!-- Tombol -->
            <div class="col-span-2 mt-6 flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition duration-200 flex items-center">
                    <i class="fas fa-save mr-2"></i> Simpan
                </button>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection() ?>
