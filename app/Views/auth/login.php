<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Admin Desa Jayaputra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        secondary: {
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                        },
                        dark: {
                            800: '#1e293b',
                            900: '#0f172a'
                        }
                    },
                    boxShadow: {
                        'glass': '0 4px 30px rgba(0, 0, 0, 0.1)',
                        'neumorphic': '8px 8px 16px #d1d9e6, -8px -8px 16px #ffffff'
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-reverse': 'float 6s ease-in-out infinite reverse',
                        'fade-in': 'fadeIn 0.5s ease-in'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .bg-auth {
            background: radial-gradient(circle at 10% 20%, rgba(59, 130, 246, 0.1) 0%, rgba(255, 255, 255, 0) 30%), 
                        radial-gradient(circle at 90% 80%, rgba(139, 92, 246, 0.1) 0%, rgba(255, 255, 255, 0) 30%);
        }
    </style>
</head>
<body class="bg-auth bg-gradient-to-br from-gray-50 to-white min-h-screen flex items-center justify-center p-4 overflow-hidden">
    <!-- Floating decorative elements -->
    <div class="absolute top-20 left-10 w-16 h-16 rounded-full bg-primary-500 opacity-10 mix-blend-multiply filter blur-xl animate-float"></div>
    <div class="absolute bottom-20 right-10 w-24 h-24 rounded-full bg-secondary-500 opacity-10 mix-blend-multiply filter blur-xl animate-float-reverse"></div>
    
    <div class="relative w-full max-w-lg bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20 overflow-hidden z-10 animate-fade-in">
        <!-- Decorative accent -->
        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary-500 to-secondary-500"></div>
        
        <div class="p-8">
            <!-- Logo Section -->
           <div class="flex justify-center mb-8">
    <div class="relative flex items-center space-x-8">
        <div class="relative group transition-transform duration-300 hover:scale-110">
            <div class="absolute -inset-0.5 rounded-lg bg-gray-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <img src="<?= base_url('LogoJayputra.jpg') ?>" alt="Logo Desa" class="relative w-14 h-14 object-contain">
        </div>
        <div class="relative group transition-transform duration-300 hover:scale-110">
            <div class="absolute -inset-0.5 rounded-lg bg-gray-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <img src="<?= base_url('KabTasik.png') ?>" alt="Logo Kabupaten" class="relative w-14 h-14 object-contain">
        </div>
        <div class="relative group transition-transform duration-300 hover:scale-110">
            <div class="absolute -inset-0.5 rounded-lg bg-gray-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <img src="<?= base_url('LogoKKNJ.png') ?>" alt="Logo KKN" class="relative w-14 h-14 object-contain">
        </div>
    </div>
</div>
            <h2 class="text-3xl font-bold text-center mb-2 text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-secondary-600">
                Sistem Surat Desa Jayaputra
            </h2>
            <p class="text-sm text-gray-500 text-center mb-8">Masukkan kredensial Anda untuk mengakses sistem</p>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6 text-sm flex items-center animate-pulse">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/login') ?>" method="post" class="space-y-6">
                <!-- Email -->
                <div class="space-y-1">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <input type="email" name="email" id="email" required
                            class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent text-sm placeholder-gray-400 transition duration-200 bg-white/50 hover:bg-white shadow-sm"
                            placeholder="email@example.com">
                    </div>
                </div>

                <!-- Password -->
                <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" name="password" id="password" required
                            class="w-full pl-10 pr-10 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent text-sm placeholder-gray-400 transition duration-200 bg-white/50 hover:bg-white shadow-sm"
                            placeholder="••••••••">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button type="button" class="text-gray-400 hover:text-primary-500 transition-colors duration-200">
                                <i class="fas fa-eye-slash" id="togglePassword"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-500">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                    </div>
                    
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 text-white font-semibold py-3 px-4 rounded-xl transition duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 flex items-center justify-center group">
                    <span class="relative">
                        <i class="fas fa-sign-in-alt mr-2 transition-transform duration-200 group-hover:translate-x-1"></i>
                        Masuk
                    </span>
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <p class="text-xs text-gray-500">
                    &copy; <?= date('Y') ?> Sistem Surat Desa Jayaputra. All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>