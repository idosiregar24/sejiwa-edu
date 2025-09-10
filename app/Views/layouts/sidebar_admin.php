<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Admin Sejiwa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/layoutsCss/sidebar_admin.css') ?>">
</head>
<body>

<aside class="sidebar">
    <div>
      <h2>Sejiwa</h2>
      <ul class="menu">
        <li><a href="<?= base_url('dashboard_admin') ?>" class="active"><i class="bi bi-grid"></i> Dashboard</a></li>
        <li><a href="<?= base_url('user_management') ?>"><i class="bi bi-person"></i> Account</a></li>
        <li><a href="<?= base_url('content-management') ?>"><i class="bi bi-mortarboard"></i> Educational</a></li>
        <li><a href="#"><i class="bi bi-chat-dots"></i> Forum</a></li>
        <li><a href="#"><i class="bi bi-bar-chart"></i> Statistics</a></li>
        <li><a href="#"><i class="bi bi-gear"></i> Setting</a></li>
      </ul>
    </div>
    <div class="user-profile">
      <img src="https://via.placeholder.com/40" alt="User">
      <div class="user-info">
        <h4><?= session()->get('name') ?></h4>
        <p>Admin</p>
      </div>
      <a href="<?= base_url('logout') ?>">
        <i class="bi bi-box-arrow-right logout"></i>
      </a>
    </div>
  </div>
</aside>
</body>
</html>
