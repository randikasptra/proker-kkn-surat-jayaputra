<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto mt-10 px-4 ml-64">

    <?php if(session()->getFlashdata('success')): ?>
        <div class="mb-4 p-3 bg-green-100"><?= session()->getFlashdata('success') ?></div>
    <?php elseif(session()->getFlashdata('error')): ?>
        <div class="mb-4 p-3 bg-red-100"><?= session()->getFlashdata('error') ?></div>
    <?php elseif(session()->getFlashdata('info')): ?>
        <div class="mb-4 p-3 bg-yellow-100"><?= session()->getFlashdata('info') ?></div>
    <?php endif; ?>

    <div class="mb-4">
        <a href="/pengajuan/import" class="btn btn-primary">Import dari Google Sheet</a>
    </div>

    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; }
        th { background-color: #f3f3f3; }
        .btn { padding: 5px 10px; border-radius: 5px; font-size: 14px; cursor: pointer; }
        .btn-primary { background-color: #3b82f6; color: white; }
        .btn-danger { background-color: #ef4444; color: white; }
    </style>

    <table id="pengajuanTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Tanggal Pengajuan</th>
                <th>Jenis Surat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pengajuan) && is_array($pengajuan)): ?>
                <?php foreach ($pengajuan as $row): ?>
                    <tr>
                        <td><?= esc($row['nama'] ?? '-') ?></td>
                        <td><?= esc($row['nik'] ?? '-') ?></td>
                        <td><?= esc(!empty($row['tanggal_pengajuan']) ? date('d-m-Y', strtotime($row['tanggal_pengajuan'])) : '-') ?></td>
                        <td><?= esc($row['jenis_surat'] ?? '-') ?></td>
                        <td>
                            <button class="btn btn-primary">Lihat</button>
                            <button class="btn btn-primary">Print</button>
                            <button class="btn btn-danger" onclick="hapusRow(<?= $row['id'] ?>, this)">Hapus</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">Data tidak tersedia.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>

<script>
function hapusRow(id, button) {
    if (!confirm("Yakin ingin menghapus data ini dari database?")) return;

    fetch(`/pengajuan/delete/${id}`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({})
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            button.closest("tr").remove();
            alert("Data berhasil dihapus");
        } else {
            alert("Gagal menghapus data: " + (data.message || ''));
        }
    })
    .catch(err => {
        alert("Terjadi kesalahan: " + err);
    });
}
</script>

<?= $this->endSection() ?>
