<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-8 px-4 sm:px-6 lg:px-8 ml-64">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-xl overflow-hidden border border-gray-100">
        <div class="bg-blue-600 px-6 py-4">
            <div class="flex items-center">
                <i class="fas fa-user-plus text-white text-xl mr-3"></i>
                <h2 class="text-xl font-bold text-white">Tambah Akun Baru</h2>
            </div>
            <p class="text-blue-100 text-sm mt-1">Lengkapi form untuk menambahkan akun baru</p>
        </div>

        <div class="p-6 space-y-5">
            <!-- Flashdata Success -->
            <?php if(session()->getFlashdata('success')): ?>
                <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded flex items-start">
                    <i class="fas fa-check-circle mr-2 mt-0.5"></i>
                    <div><?= session()->getFlashdata('success') ?></div>
                </div>
            <?php endif; ?>

            <!-- Flashdata Errors -->
            <?php if(session()->getFlashdata('errors')): ?>
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded">
                    <div class="flex items-start">
                        <i class="fas fa-exclamation-circle mr-2 mt-0.5"></i>
                        <div>
                            <?php foreach(session()->getFlashdata('errors') as $error): ?>
                                <p class="mb-1 last:mb-0"><?= esc($error) ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Form Input -->
            <form action="<?= base_url('/users/store') ?>" method="POST" class="space-y-4">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                        <div class="relative">
                            <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" name="username" placeholder="Masukkan username" value="<?= old('username') ?>" 
                                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <div class="relative">
                            <i class="fas fa-id-card absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" name="name" placeholder="Masukkan nama lengkap" value="<?= old('name') ?>" 
                                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <div class="relative">
                            <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                            <input type="email" name="email" placeholder="Masukkan email" value="<?= old('email') ?>" 
                                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nomor HP</label>
                        <div class="relative">
                            <i class="fas fa-phone-alt absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" name="no_hp" placeholder="Masukkan nomor HP" value="<?= old('no_hp') ?>" 
                                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                        <div class="relative">
                            <i class="fas fa-map-marker-alt absolute left-3 top-3 text-gray-400"></i>
                            <textarea name="alamat" placeholder="Masukkan alamat lengkap" 
                                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent min-h-[100px]" required><?= old('alamat') ?></textarea>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                            <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
                            <input type="password" name="password" placeholder="Masukkan password" 
                                class="w-full pl-10 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            <button type="button" class="absolute right-3 top-3 text-gray-400 hover:text-gray-600" onclick="togglePasswordVisibility(this)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 text-white font-medium py-2.5 px-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center mt-6">
                    <i class="fas fa-save mr-2"></i> Simpan Akun
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility(button) {
        const input = button.parentElement.querySelector('input');
        const icon = button.querySelector('i');
        
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>

<?= $this->endSection() ?>