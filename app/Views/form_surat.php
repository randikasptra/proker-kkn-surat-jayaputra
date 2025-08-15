<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10 ml-64">
    <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Pilih Jenis Surat</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- SKTM -->
        <a href="<?= base_url('/surat/form_sktm') ?>" 
   class="group p-6 border rounded-lg hover:shadow-lg hover:border-blue-500 transition">
    <div class="flex flex-col items-center text-center">
        <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4">
            📄
        </div>
        <h3 class="text-lg font-semibold mb-2 group-hover:text-blue-600">
            Surat Keterangan Tidak Mampu
        </h3>
        <p class="text-sm text-gray-500">
            Untuk keperluan sekolah, bantuan sosial, atau pengobatan.
        </p>
    </div>
</a>


        <!-- Domisili -->
        <a href="<?= base_url('/surat/form_domisili') ?>" 
           class="group p-6 border rounded-lg hover:shadow-lg hover:border-blue-500 transition">
            <div class="flex flex-col items-center text-center">
                <div class="bg-green-100 text-green-600 p-4 rounded-full mb-4">
                    🏠
                </div>
                <h3 class="text-lg font-semibold mb-2 group-hover:text-green-600">
                    Surat Keterangan Domisili
                </h3>
                <p class="text-sm text-gray-500">
                    Bukti resmi tempat tinggal Anda di desa ini.
                </p>
            </div>
        </a>

        <!-- Pengantar KTP -->
        <a href="<?= base_url('/surat/form_ktp') ?>" 
           class="group p-6 border rounded-lg hover:shadow-lg hover:border-blue-500 transition">
            <div class="flex flex-col items-center text-center">
                <div class="bg-yellow-100 text-yellow-600 p-4 rounded-full mb-4">
                    🆔
                </div>
                <h3 class="text-lg font-semibold mb-2 group-hover:text-yellow-600">
                    Surat Pengantar KTP
                </h3>
                <p class="text-sm text-gray-500">
                    Pengantar resmi untuk pembuatan atau perpanjangan KTP.
                </p>
            </div>
        </a>

        <!-- SKU -->
        <a href="<?= base_url('/surat/sku_form') ?>" 
           class="group p-6 border rounded-lg hover:shadow-lg hover:border-blue-500 transition">
            <div class="flex flex-col items-center text-center">
                <div class="bg-purple-100 text-purple-600 p-4 rounded-full mb-4">
                    🏪
                </div>
                <h3 class="text-lg font-semibold mb-2 group-hover:text-purple-600">
                    Surat Keterangan Usaha
                </h3>
                <p class="text-sm text-gray-500">
                    Surat resmi sebagai bukti kepemilikan usaha.
                </p>
            </div>
        </a>

        <!-- Kelahiran -->
        <a href="<?= base_url('/surat/form/kelahiran') ?>" 
           class="group p-6 border rounded-lg hover:shadow-lg hover:border-blue-500 transition">
            <div class="flex flex-col items-center text-center">
                <div class="bg-pink-100 text-pink-600 p-4 rounded-full mb-4">
                    👶
                </div>
                <h3 class="text-lg font-semibold mb-2 group-hover:text-pink-600">
                    Surat Keterangan Kelahiran
                </h3>
                <p class="text-sm text-gray-500">
                    Bukti resmi kelahiran untuk keperluan administrasi.
                </p>
            </div>
        </a>
    </div>
</div>
<?= $this->endSection() ?>
