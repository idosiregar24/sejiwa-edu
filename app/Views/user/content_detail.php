<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($content['title']) ?> - Sejiwa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-4">
  <div class="row g-4">
    
    <!-- KONTEN UTAMA -->
    <div class="col-lg-8">
      <!-- Video Player -->
      <div class="ratio ratio-16x9 mb-3">
        <video controls autoplay>
          <source src="<?= base_url($content['file_path']) ?>" type="video/mp4">
          Browser Anda tidak mendukung pemutar video.
        </video>
      </div>
      
      <!-- Info Video -->
      <h3 class="fw-bold"><?= esc($content['title']) ?></h3>
      <div class="d-flex align-items-center gap-3 mb-3">
        <button class="btn btn-outline-danger btn-sm like-btn" data-id="<?= $content['id'] ?>">
          <i class="bi bi-heart-fill"></i>
          <span class="like-count"><?= $content['like_count'] ?? 0 ?></span>
        </button>
        <span class="badge bg-primary"><?= esc($content['category']) ?></span>
      </div>
      <p class="text-muted"><?= esc($content['body']) ?></p>
      
      <!-- Komentar -->
      <hr>
      <h5 class="fw-semibold">Komentar</h5>
      <form id="commentForm" method="post" action="<?= base_url('content/comment/'.$content['id']) ?>">
        <textarea class="form-control mb-2" name="comment" rows="3" placeholder="Tulis komentar..."></textarea>
        <button class="btn btn-primary btn-sm"><i class="bi bi-send"></i> Kirim</button>
      </form>

      <!-- List Komentar -->
      <div class="mt-4">
        <?php if (!empty($comments)): ?>
          <?php foreach ($comments as $c): ?>
            <div class="mb-3 p-3 border rounded bg-white shadow-sm">
              <strong class="d-block mb-1"><?= esc($c['user_name']) ?></strong>
              <p class="mb-0"><?= esc($c['comment']) ?></p>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-muted">Belum ada komentar, jadilah yang pertama!</p>
        <?php endif; ?>
      </div>
    </div>
    
    <!-- SIDEBAR REKOMENDASI -->
    <div class="col-lg-4">
      <h6 class="fw-bold mb-3">Video Lainnya</h6>
      <?php foreach ($related as $r): ?>
        <a href="<?= base_url('content/detail/'.$r['id']) ?>" class="d-flex mb-3 text-decoration-none text-dark align-items-center">
          <img src="<?= base_url($r['thumbnail']) ?>" 
               class="rounded me-3 shadow-sm" width="120" height="75" 
               style="object-fit:cover;">
          <div>
            <p class="fw-semibold small mb-1"><?= esc($r['title']) ?></p>
            <span class="badge bg-secondary"><?= esc($r['category']) ?></span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
