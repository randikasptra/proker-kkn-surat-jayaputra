<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto mt-10 px-4 ml-64">
    <div class="bg-white shadow rounded-xl p-6">
        <div class="flex items-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h1 class="text-3xl font-bold text-gray-800 ml-3">Dashboard Admin</h1>
        </div>
        
        <p class="text-gray-600 text-lg mb-8">Selamat datang di <strong class="text-indigo-600">Halaman Admin Desa</strong>. Kelola permohonan surat warga dengan mudah.</p>
        
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Total Permohonan Card -->
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 border-l-4 border-blue-500 rounded-lg p-5 flex items-start">
                <div class="bg-blue-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">Total Permohonan</h2>
                    <p class="text-2xl mt-1 font-bold text-gray-800"><?= $total_permohonan ?></p>
                    <p class="text-sm text-blue-600 mt-1">Semua jenis surat</p>
                </div>
            </div>

            <!-- SKTM Card -->
            <div class="bg-gradient-to-r from-green-50 to-green-100 border-l-4 border-green-500 rounded-lg p-5 flex items-start">
                <div class="bg-green-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">Surat SKTM</h2>
                    <p class="text-2xl mt-1 font-bold text-gray-800"><?= $total_sktm ?></p>
                    <p class="text-sm text-green-600 mt-1">Tidak Mampu</p>
                </div>
            </div>

            <!-- Domisili Card -->
            <div class="bg-gradient-to-r from-amber-50 to-amber-100 border-l-4 border-amber-500 rounded-lg p-5 flex items-start">
                <div class="bg-amber-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">Surat Domisili</h2>
                    <p class="text-2xl mt-1 font-bold text-gray-800"><?= $total_domisili ?></p>
                    <p class="text-sm text-amber-600 mt-1">Tempat Tinggal</p>
                </div>
            </div>

            <!-- KTP Card -->
            <div class="bg-gradient-to-r from-purple-50 to-purple-100 border-l-4 border-purple-500 rounded-lg p-5 flex items-start">
                <div class="bg-purple-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">Surat KTP</h2>
                    <p class="text-2xl mt-1 font-bold text-gray-800"><?= $total_ktp ?></p>
                    <p class="text-sm text-purple-600 mt-1">Kartu Tanda Penduduk</p>
                </div>
            </div>

            <!-- SKU Card -->
            <div class="bg-gradient-to-r from-pink-50 to-pink-100 border-l-4 border-pink-500 rounded-lg p-5 flex items-start">
                <div class="bg-pink-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">Surat SKU</h2>
                    <p class="text-2xl mt-1 font-bold text-gray-800"><?= $total_sku ?></p>
                    <p class="text-sm text-pink-600 mt-1">Usaha</p>
                </div>
            </div>

         
        </div>
    </div>
</div>
<?= $this->endSection() ?>