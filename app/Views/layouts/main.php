<!-- app/Views/layouts/main.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'Admin Desa') ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="flex">
    <?= view('components/sidebar') ?>

    <main class="flex-1 p-6">
      <?= $this->renderSection('content') ?>
    </main>
  </div>

</body>
</html>
