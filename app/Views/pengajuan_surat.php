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
    </style>

<body>
    <h2><?= esc($title) ?></h2>

    <table>
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Keperluan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengajuan as $row): ?>
                <tr>
                    <td><?= esc($row['Timestamp']) ?></td>
                    <td><?= esc($row['Nama']) ?></td>
                    <td><?= esc($row['NIK']) ?></td>
                    <td><?= esc($row['Alamat']) ?></td>
                    <td><?= esc($row['Keperluan']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
