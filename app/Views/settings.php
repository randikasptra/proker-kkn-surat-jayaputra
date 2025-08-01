<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-lg">
        <h2 class="text-3xl font-semibold text-center mb-6 text-gray-800">Pengaturan Akun</h2>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php elseif (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/settings/update') ?>" method="post" class="space-y-5">
            <div>
                <label for="username" class="block mb-1 font-medium text-gray-700">Username Baru</label>
                <input type="text" name="username" id="username" value="<?= esc($user['username']) ?>" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="password" class="block mb-1 font-medium text-gray-700">Password Baru</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <small class="text-gray-500">Kosongkan jika tidak ingin mengubah password</small>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition duration-200">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
