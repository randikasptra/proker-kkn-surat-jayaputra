<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto mt-10 px-4 ml-64">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f3f3f3;
        }
        .btn {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #3b82f6;
            color: white;
        }
        .btn-danger {
            background-color: #ef4444;
            color: white;
        }
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
                    <td><?= esc($row['nama']) ?></td>
                    <td><?= esc($row['nik']) ?></td>
                    <td><?= esc($row['tanggal_pengajuan']) ?></td>
                    <td><?= esc($row['jenis_surat']) ?></td>
                    <td>
                        <button class="btn btn-primary">Lihat</button>
                        <button class="btn btn-primary">Print</button>
<button class="btn btn-danger" onclick="hapusRow(<?= $row['id'] ?>, this)">Hapus</button>

                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Data tidak tersedia atau format salah.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

</div>

<script>
function hapusRow(button) {
    if (confirm("Yakin ingin menghapus data ini dari tampilan?")) {
        let row = button.closest("tr");
        row.remove();
    }
}
</script>
<script>
function hapusRow(id, button) {
    if (confirm("Yakin ingin menghapus data ini dari database?")) {
        fetch(`/pengajuan-surat/${id}`, { // <-- Sesuai route
            method: 'DELETE',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                button.closest("tr").remove();
                alert("Data berhasil dihapus");
            } else {
                alert("Gagal menghapus data");
            }
        })
        .catch(err => {
            alert("Terjadi kesalahan: " + err);
        });
    }
}
</script>


<?= $this->endSection() ?>
