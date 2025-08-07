<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto mt-10 px-4 ml-64">
    <div class="bg-white shadow rounded-xl p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Laporan Surat</h1>

        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">NIK</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Jenis Surat</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Tanggal Permohonan</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                    <td class="border border-gray-300 px-4 py-2">Randika Saputra</td>
                    <td class="border border-gray-300 px-4 py-2">327501xxxxxxxxxx</td>
                    <td class="border border-gray-300 px-4 py-2">Surat Keterangan Tidak Mampu</td>
                    <td class="border border-gray-300 px-4 py-2">01 Agustus 2025</td>
                    <td class="border border-gray-300 px-4 py-2 text-green-700 font-semibold">Selesai</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">2</td>
                    <td class="border border-gray-300 px-4 py-2">Dewi Lestari</td>
                    <td class="border border-gray-300 px-4 py-2">327501xxxxxxxxxx</td>
                    <td class="border border-gray-300 px-4 py-2">Surat Keterangan Domisili</td>
                    <td class="border border-gray-300 px-4 py-2">29 Juli 2025</td>
                    <td class="border border-gray-300 px-4 py-2 text-yellow-700 font-semibold">Diproses</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">3</td>
                    <td class="border border-gray-300 px-4 py-2">Ahmad Ramadhan</td>
                    <td class="border border-gray-300 px-4 py-2">327501xxxxxxxxxx</td>
                    <td class="border border-gray-300 px-4 py-2">Surat Pengantar SKCK</td>
                    <td class="border border-gray-300 px-4 py-2">25 Juli 2025</td>
                    <td class="border border-gray-300 px-4 py-2 text-red-700 font-semibold">Ditolak</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
