<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/dashboard_user.css') ?>">
  <title>Beranda SEJIWA</title>
</head>

<body>
  <main>
    <section class="hero-section">


      <!-- Menambahkan Navbar -->
      <?= $this->include('layouts/navbar') ?>


      <div class="hero-content">
        <h1>SEJIWA</h1>
        <div class="subjudul">
          <h1>Sentra Edukasi Jiwa Ibu Welas Asih</h1>
        </div>
        <h5><i> "Bersama Sejiwa, Tiap Ibu Punya Ruang Aman dan Hangat untuk Didengar dan Berdaya"</i></h5>
        <br>
        <a href="<?= base_url('about') ?>">
          <button class="btn btn-about-2">Tentang Kami</button>
        </a>

      </div>
      <div class="hero-image">
        <img src="<?= base_url('assets/img/ilustrasi_ibu_dan_anak.svg') ?>" alt="Ilustrasi Ibu dan Anak" />
      </div>
    </section>

    <!-- Content Section -->
    <section class="content-section py-4">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h2 class="fw-bold">Ruang Edukatif Sejiwa</h2>
          <h6 class="text-muted">Tempat teduh untuk ibu belajar, mengenal, dan memahami dengan kasih</h6>
        </div>
        <a href="<?= base_url('videos') ?>" class="btn btn-outline-secondary btn-sm">
          Lihat Video Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i>
        </a>

      </div>

      <!-- Slider Section -->
      <div class="position-relative">
        <!-- Tombol kiri -->
        <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y shadow rounded-circle"
          onclick="slideLeft()" style="z-index:10">
          <i class="bi bi-chevron-left"></i>
        </button>

        <!-- Container Scroll -->
        <div class="container my-4">
          <div class="d-flex overflow-auto pb-2" style="gap: 16px; scroll-behavior: smooth;">

            <?php foreach ($videos as $video): ?>
              <!-- Card sebagai link ke detail -->
              <a href="<?= base_url('content/detail/' . $video['id']) ?>" class="text-decoration-none text-dark"
                style="min-width: 350px;">
                <div class="card shadow-sm h-100 rounded-3 overflow-hidden">
                  <!-- Thumbnail -->
                  <img src="<?= base_url($video['thumbnail'] ?? 'assets/img/default-thumbnail.jpg') ?>"
                    class="card-img-top" alt="<?= esc($video['title'] ?? 'No Title') ?>"
                    style="height:180px; object-fit:cover; transition: transform 0.3s ease;">

                  <div class="card-body d-flex flex-column justify-content-between">
                    <!-- Judul -->
                    <h6 class="fw-bold text-truncate mb-2"><?= esc($video['title']) ?></h6>

                    <!-- Like & Kategori -->
                    <div class="d-flex justify-content-between align-items-center mt-auto">
                      <span class="text-muted small">
                        <i class="bi bi-heart-fill text-danger"></i> <?= $video['like_count'] ?? 0 ?>
                      </span>
                      <span class="badge bg-success"><?= esc($video['category']) ?></span>
                    </div>
                  </div>
                </div>
              </a>
            <?php endforeach; ?>

          </div>
        </div>

        <!-- Tombol kanan -->
        <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y shadow rounded-circle"
          onclick="slideRight()" style="z-index:10">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </section>

    <!-- Bisikan Bunda -->
    <section class="content-section py-2">
      <div class="bisikan-section">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h3 class="fw-bold">Bisikan Bunda</h3>
          </div>
        </div>

        <!-- Tombol Navigasi -->
        <button class="nav-btn nav-left">&lt;</button>

        <!-- Card Testimoni -->
        <div class="testimonial-card">
          <div class="d-flex align-items-center">
            <img src="https://i.pravatar.cc/100?img=32" alt="avatar">
            <div>
              <h6 class="mb-0 fw-bold">Dazzle Healer</h6>
              <small class="text-muted">Front End Developer</small>
            </div>
          </div>
          <hr>
          <p class="testimonial-text">
            “Saat dunia terasa terlalu terang, terlalu keras, atau terlalu cepat...<br>
            pelukanmu menjadi jeda yang menyelamatkan.”
          </p>
        </div>

        <!-- Gambar Ibu -->
        <img src="<?= base_url('assets/img/bisikan-bunda.svg') ?>" alt="mom" class="bg-mom">

        <!-- Tombol Navigasi -->
        <button class="nav-btn nav-right">&gt;</button>
      </div>
    </section>

    <br>

    <!-- Menambahkan Footer -->
    <?= $this->include('layouts/footer') ?>
  </main>
</body>

<script>
  // Ambil container scroll
  const scrollContainer = document.querySelector('.d-flex.overflow-auto');

  // Jumlah scroll per klik (px)
  const scrollAmount = 350;

  function slideLeft() {
    scrollContainer.scrollBy({
      left: -scrollAmount,
      behavior: 'smooth'
    });
  }

  function slideRight() {
    scrollContainer.scrollBy({
      left: scrollAmount,
      behavior: 'smooth'
    });
  }
</script>



<script>
  let slider = document.getElementById("slider");
  let scrollAmount = 0;

  function slideLeft() {
    slider.scrollBy({
      left: -300,
      behavior: "smooth"
    });
  }

  function slideRight() {
    slider.scrollBy({
      left: 300,
      behavior: "smooth"
    });
  }
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".like-btn").forEach(btn => {
      let contentId = btn.dataset.id;

      // Load jumlah like saat halaman dibuka
      fetch(`/content/likes/${contentId}`)
        .then(res => res.json())
        .then(data => {
          btn.querySelector(".like-count").textContent = data.likes;
        });

      // Event klik tombol like
      btn.addEventListener("click", function () {
        fetch(`/content/like/${contentId}`, {
          method: "POST"
        })
          .then(res => res.json())
          .then(data => {
            // Refresh jumlah like
            fetch(`/content/likes/${contentId}`)
              .then(res => res.json())
              .then(data => {
                btn.querySelector(".like-count").textContent = data.likes;
              });
          });
      });
    });
  });
</script>



</html>