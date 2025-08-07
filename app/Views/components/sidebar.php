<!-- Sidebar Component -->
<aside class="w-64 bg-white shadow-md flex flex-col min-h-screen fixed">
  <div class="p-6 text-xl font-bold text-blue-600 border-b flex items-center">
    <i class="fas fa-landmark mr-2"></i>
    <span>Admin Desa Jayaputra</span>
  </div>
  <nav class="flex-1 px-4 py-6 space-y-2 text-gray-700 text-sm">

    <a href="/dashboard" class="flex items-center px-4 py-2.5 rounded hover:bg-blue-50 transition-colors duration-200">
      <i class="fas fa-home mr-3 w-5 text-center text-blue-500"></i>
      <span>Dashboard</span>
    </a>

     <a href="/users" class="flex items-center px-4 py-2.5 rounded hover:bg-blue-50 transition-colors duration-200">
      <i class="fas fa-user-plus mr-3 w-5 text-center text-blue-500"></i>
      <span>Tambah Akun</span>
    </a>

    <a href="/pengajuan-surat" class="flex items-center px-4 py-2.5 rounded hover:bg-blue-50 transition-colors duration-200">
      <i class="fas fa-inbox mr-3 w-5 text-center text-blue-500"></i>
      <span>Daftar Pengajuan</span>
    </a>

    <a href="/surat" class="flex items-center px-4 py-2.5 rounded hover:bg-blue-50 transition-colors duration-200">
      <i class="fas fa-file-alt mr-3 w-5 text-center text-blue-500"></i>
      <span>Template Surat</span>
    </a>

    <a href="/laporan-surat" class="flex items-center px-4 py-2.5 rounded hover:bg-blue-50 transition-colors duration-200">
      <i class="fas fa-chart-bar mr-3 w-5 text-center text-blue-500"></i>
      <span>Laporan Surat</span>
    </a>

    <a href="/settings" class="flex items-center px-4 py-2.5 rounded hover:bg-blue-50 transition-colors duration-200">
      <i class="fas fa-cog mr-3 w-5 text-center text-blue-500"></i>
      <span>Pengaturan</span>
    </a>

   

    <div class="border-t border-gray-200 mt-4 pt-4">
      <a href="/logout" class="flex items-center px-4 py-2.5 rounded hover:bg-red-50 text-red-600 transition-colors duration-200">
        <i class="fas fa-sign-out-alt mr-3 w-5 text-center text-red-500"></i>
        <span>Logout</span>
      </a>
    </div>

  </nav>
</aside>
