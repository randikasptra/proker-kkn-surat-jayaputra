<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto mt-10 px-4 ml-64">
    <div class="bg-white shadow rounded-xl p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Laporan Surat</h1>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php elseif(session()->getFlashdata('error')): ?>
            <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Jenis Surat</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Tanggal Permohonan</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($laporan)): ?>
                    <?php foreach ($laporan as $i => $row): ?>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2"><?= $i + 1 ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= esc($row['nama']) ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= esc($row['jenis_surat']) ?></td>
                            <td class="border border-gray-300 px-4 py-2">
                                <?= date('d F Y', strtotime($row['tanggal_permohonan'])) ?>
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <!-- Review -->
                                <a href="<?= $row['link_cetak'] ?>" target="_blank" 
                                   class="text-blue-600 hover:text-blue-800 mr-2" 
                                   title="Review & Cetak">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <!-- Hapus -->
                                <a href="<?= $row['link_hapus'] ?>" 
                                   onclick="return confirm('Yakin ingin menghapus data ini?')"
                                   class="text-red-600 hover:text-red-800" 
                                   title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="border border-gray-300 px-4 py-2 text-center text-gray-500">
                            Tidak ada data
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
