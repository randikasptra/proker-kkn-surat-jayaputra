<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-4 ml-64">
    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md border border-gray-100">
        <div class="flex flex-col items-center mb-8">
            <div class="bg-blue-100 p-3 rounded-full mb-4">
                <i class="fas fa-user-cog text-blue-600 text-2xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Pengaturan Akun</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola informasi akun Anda</p>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded mb-6 flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php elseif (session()->getFlashdata('error')): ?>
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded mb-6 flex items-center">
                <i class="fas fa-exclamation-circle mr-2"></i>
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/settings/update') ?>" method="post" class="space-y-6">
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-user mr-2 text-blue-500"></i>
                    Username Baru
                </label>
                <div class="relative">
                    <input type="text" name="username" id="username" value="<?= esc($user['username']) ?>" required 
                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        placeholder="Masukkan username baru">
                    <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700 flex items-center">
                    <i class="fas fa-lock mr-2 text-blue-500"></i>
                    Password Baru
                </label>
                <div class="relative">
                    <input type="password" name="password" id="password" 
                        class="w-full pl-10 pr-10 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        placeholder="Masukkan password baru">
                    <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
                    <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye" id="passwordToggleIcon"></i>
                    </button>
                </div>
                <small class="text-gray-400 text-xs mt-1 flex items-center">
                    <i class="fas fa-info-circle mr-1"></i> Kosongkan jika tidak ingin mengubah password
                </small>
            </div>

            <div class="pt-2">
                <button type="submit" 
                    class="w-full bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 text-white font-medium py-2.5 px-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-save mr-2"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const icon = document.getElementById('passwordToggleIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>

<?= $this->endSection() ?>