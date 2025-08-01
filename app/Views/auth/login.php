<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login Admin Desa</h2>
        
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/login') ?>" method="post">
            <div class="mb-4">
                <label for="nik" class="block text-sm font-medium">NIK</label>
                <input type="text" name="nik" id="nik" required
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded transition">Login</button>
        </form>
    </div>
</body>
</html>
