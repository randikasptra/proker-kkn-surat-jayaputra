<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto mt-10 px-4">
    <div class="bg-white shadow rounded-xl p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Dashboard</h1>
        <p class="text-gray-600 text-lg">Selamat datang di <strong>Halaman Admin Desa</strong>.</p>
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-blue-100 border border-blue-300 rounded-lg p-5 text-blue-800">
                <h2 class="text-lg font-semibold">Total Permohonan Surat</h2>
                <p class="text-2xl mt-2 font-bold">120</p>
            </div>

            <div class="bg-green-100 border border-green-300 rounded-lg p-5 text-green-800">
                <h2 class="text-lg font-semibold">Permohonan Diproses</h2>
                <p class="text-2xl mt-2 font-bold">35</p>
            </div>

            <div class="bg-yellow-100 border border-yellow-300 rounded-lg p-5 text-yellow-800">
                <h2 class="text-lg font-semibold">Permohonan Menunggu</h2>
                <p class="text-2xl mt-2 font-bold">85</p>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>
