<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-4xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden mt-10 ml-96">
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 p-6 text-white">
        <h2 class="text-3xl font-bold text-center flex items-center justify-center gap-3">
            <i class="fas fa-file-alt"></i>
            Form Surat Keterangan Tidak Mampu (SKTM)
        </h2>
    </div>

        <form action="<?= base_url('surat/sktm/save') ?>" method="post" class="px-24  my-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Kolom 1 -->
            <div class="space-y-6">
                <!-- Nama Lengkap -->
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 flex items-center gap-2">
                        <i class="fas fa-user text-blue-600"></i>
                        Nama Lengkap
                    </label>
                    <input type="text" name="nama" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <!-- Tempat Lahir -->
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-blue-600"></i>
                        Tempat Lahir
                    </label>
                    <input type="text" name="tempat_lahir" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <!-- Tanggal Lahir -->
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 flex items-center gap-2">
                        <i class="fas fa-calendar-day text-blue-600"></i>
                        Tanggal Lahir
                    </label>
                    <input type="date" name="tanggal_lahir" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <!-- Jenis Kelamin -->
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 flex items-center gap-2">
                        <i class="fas fa-venus-mars text-blue-600"></i>
                        Jenis Kelamin
                    </label>
                    <select name="jenis_kelamin" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        <option value="">-- Pilih --</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>

            <!-- Kolom 2 -->
            <div class="space-y-6">
                <!-- NIK -->
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 flex items-center gap-2">
                        <i class="fas fa-id-card text-blue-600"></i>
                        NIK
                    </label>
                    <input type="text" name="nik" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <!-- Alamat -->
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 flex items-center gap-2">
                        <i class="fas fa-home text-blue-600"></i>
                        Alamat
                    </label>
                    <textarea name="alamat" rows="3" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"></textarea>
                </div>

                <!-- Keperluan -->
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 flex items-center gap-2">
                        <i class="fas fa-clipboard-list text-blue-600"></i>
                        Keperluan
                    </label>
                    <textarea name="keperluan" rows="3" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"></textarea>
                </div>

                <!-- Tanggal Surat -->
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-1 flex items-center gap-2">
                        <i class="fas fa-calendar-check text-blue-600"></i>
                        Tanggal Surat
                    </label>
                    <input type="date" name="tanggal_surat" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-10 text-center">
            <button type="submit" 
                class="bg-gradient-to-r from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 text-white px-8 py-3 rounded-lg font-medium shadow-md hover:shadow-lg transition duration-300 flex items-center justify-center gap-2 mx-auto">
                <i class="fas fa-save"></i>
                Simpan & Cetak
            </button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>