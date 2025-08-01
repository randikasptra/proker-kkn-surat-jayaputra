<!-- app/Views/dashboard.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Sistem Surat Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white px-6 py-4 shadow-md flex justify-between items-center">
        <h1 class="text-xl font-bold">Sistem Surat Desa</h1>
        <a href="<?= base_url('/auth/logout') ?>" class="text-sm hover:underline">Logout</a>
    </nav>

    <!-- Content -->
    <div class="p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Selamat Datang, <?= session()->get('name') ?></h2>
        <p class="text-gray-600">Anda login sebagai <strong><?= session()->get('role') ?></strong></p>

        <!-- Tambahkan fitur lain di sini -->
        <div class="mt-6 bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-2">Informasi</h3>
            <p>Gunakan menu di atas untuk mengelola surat dan data pengguna.</p>
        </div>
    </div>

</body>
</html>
