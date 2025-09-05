<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Educational Management - Konten Edukasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/admin/content-management.css') ?>">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->  
      <?= $this->include('layouts/sidebar_admin') ?>
      
      <div class="content">
      
      <!-- Header -->
    <header class="text-white flex justify-between items-center py-4 px-6 rounded-b-lg shadow-md" style="background-color: #B16B8E;">
        <!-- Kotak kiri dengan icon dan judul -->
        <div class="flex items-center space-x-4">
            <span class="text-2xl">📚</span>
            <h1 class="text-xl font-semibold tracking-wider">Educational Management</h1>
        </div>

        <!-- Kotak kanan dengan icon notifikasi -->
        <div class="relative">
            <i class="fas fa-bell text-2xl"></i>
            <!-- Lingkaran kecil notifikasi -->
            <span class="absolute top-0 right-0 w-2.5 h-2.5 bg-red-500 rounded-full animate-ping"></span>
            <span class="absolute top-0 right-0 w-2.5 h-2.5 bg-red-500 rounded-full"></span>
        </div>
      </header>

        <main class="container-fluid my-4 px-4">

          <!-- Title -->
          <div class="mb-3">
            <h3>Konten Edukasi</h3>
            <p class="text-muted">Kelola semua konten edukatif untuk aplikasi Sejiwa</p>
          </div>
          <!-- Statistik -->
          <div class="row">
            <div class="col-md-3">
              <div class="card card-stat text-center">
                <div class="card-body">
                  <h4><?= $stats['total'] ?? 0 ?></h4>
                  <p class="text-muted">Total Konten</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-stat text-center">
                <div class="card-body">
                  <h4><?= $stats['published'] ?? 0 ?></h4>
                  <p class="text-muted">Published</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-stat text-center">
                <div class="card-body">
                  <h4><?= $stats['draft'] ?? 0 ?></h4>
                  <p class="text-muted">Draft</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card card-stat text-center">
                <div class="card-body">
                  <h4><?= $stats['archived'] ?? 0 ?></h4>
                  <p class="text-muted">Archived</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Search + Action -->
          <div class="d-flex justify-content-between mb-3">
            <input type="text" class="form-control w-25" placeholder="Search...">
            <div>
              <a href="#" class="btn btn-secondary">Filter Jenis Konten</a>
              <a href="<?= base_url('/content/content_form') ?>" class="btn btn-primary">+ Tambah Konten</a>
            </div>
          </div>

          <!-- Table -->
          <div class="card">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Judul</th>
                    <th>Jenis</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($contents)): ?>
                    <?php foreach ($contents as $c): ?>
                      <tr>
                        <td><?= esc($c['title']) ?></td>
                        <td><?= esc($c['type']) ?></td>
                        <td><?= esc($c['category']) ?></td>
                        <td>
                          <span class="status-pill <?= strtolower($c['status']) ?>">
                            <?= esc($c['status']) ?>
                          </span>
                        </td>
                        <td><?= esc($c['created_at']) ?></td>
                        <td>
                          <a href="<?= base_url('content/edit/'.$c['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                          <a href="<?= base_url('content/delete/'.$c['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus konten ini?')">Hapus</a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="6" class="text-center">Belum ada konten</td>
                    </tr>
                  <?php endif ?>
                </tbody>
              </table>
              </div>
          </main>
      </div>
</body>
</html>