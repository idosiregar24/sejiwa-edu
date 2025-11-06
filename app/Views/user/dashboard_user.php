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

    <section class="content-section py-4">
  <div class="bisikan-section position-relative">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h3 class="fw-bold">Bisikan Bunda</h3>
        <small class="text-muted">Total bisikan: <span id="total-bisikan">0</span></small>
      </div>
    </div>

    <!-- Tombol Navigasi Kiri -->
    <button class="nav-btn nav-left">&lt;</button>

    <!-- Slider Bisikan -->
    <div class="d-flex overflow-auto pb-2 bisikan-slider" style="gap:16px; scroll-behavior:smooth; padding:0 50px;">

      <!-- Dummy Cards -->
      <div class="card testimonial-card shadow-sm" style="min-width:280px; border-radius:12px; overflow:hidden; background-color:#fff0f5;">
        <div class="d-flex align-items-center p-3">
          <img src="https://i.pravatar.cc/100?img=32" alt="avatar" class="rounded-circle me-2" style="width:50px;height:50px;object-fit:cover;">
          <div>
            <h6 class="mb-0 fw-bold">Ibu Siti</h6>
            <small class="text-muted">Guru TK</small>
          </div>
        </div>
        <hr class="my-2">
        <p class="testimonial-text p-3 mb-0" style="font-style:italic;">
          “Pelukanmu menjadi jeda yang menenangkan di hari yang penuh tantangan.”
        </p>
      </div>

      <div class="card testimonial-card shadow-sm" style="min-width:280px; border-radius:12px; overflow:hidden; background-color:#fff0f5;">
        <div class="d-flex align-items-center p-3">
          <img src="https://i.pravatar.cc/100?img=33" alt="avatar" class="rounded-circle me-2" style="width:50px;height:50px;object-fit:cover;">
          <div>
            <h6 class="mb-0 fw-bold">Ibu Rina</h6>
            <small class="text-muted">Ibu Rumah Tangga</small>
          </div>
        </div>
        <hr class="my-2">
        <p class="testimonial-text p-3 mb-0" style="font-style:italic;">
          “Saat lelah dan bingung, aku menemukan ketenangan di ruang kecil ini.”
        </p>
      </div>

      <div class="card testimonial-card shadow-sm" style="min-width:280px; border-radius:12px; overflow:hidden; background-color:#fff0f5;">
        <div class="d-flex align-items-center p-3">
          <img src="https://i.pravatar.cc/100?img=34" alt="avatar" class="rounded-circle me-2" style="width:50px;height:50px;object-fit:cover;">
          <div>
            <h6 class="mb-0 fw-bold">Ibu Lina</h6>
            <small class="text-muted">Perawat</small>
          </div>
        </div>
        <hr class="my-2">
        <p class="testimonial-text p-3 mb-0" style="font-style:italic;">
          “Di sini aku bisa berbagi cerita dan merasa didengar tanpa takut dinilai.”
        </p>
      </div>

      <div class="card testimonial-card shadow-sm" style="min-width:280px; border-radius:12px; overflow:hidden; background-color:#fff0f5;">
        <div class="d-flex align-items-center p-3">
          <img src="https://i.pravatar.cc/100?img=35" alt="avatar" class="rounded-circle me-2" style="width:50px;height:50px;object-fit:cover;">
          <div>
            <h6 class="mb-0 fw-bold">Ibu Ana</h6>
            <small class="text-muted">Ibu Rumah Tangga</small>
          </div>
        </div>
        <hr class="my-2">
        <p class="testimonial-text p-3 mb-0" style="font-style:italic;">
          “Mendengar cerita dari ibu lain membuatku merasa lebih kuat dan tenang.”
        </p>
      </div>

      <div class="card testimonial-card shadow-sm" style="min-width:280px; border-radius:12px; overflow:hidden; background-color:#fff0f5;">
        <div class="d-flex align-items-center p-3">
          <img src="https://i.pravatar.cc/100?img=36" alt="avatar" class="rounded-circle me-2" style="width:50px;height:50px;object-fit:cover;">
          <div>
            <h6 class="mb-0 fw-bold">Ibu Maya</h6>
            <small class="text-muted">Ibu Profesional</small>
          </div>
        </div>
        <hr class="my-2">
        <p class="testimonial-text p-3 mb-0" style="font-style:italic;">
          “Setiap kata yang dibagikan memberi ketenangan di tengah rutinitas yang padat.”
        </p>
      </div>

    </div>

    <!-- Gambar Ibu -->
    <img src="<?= base_url('assets/img/bisikan-bunda.svg') ?>" alt="mom" class="bg-mom" style="position:absolute; bottom:0; right:0; opacity:0.2; width:180px; z-index:0;">

    <!-- Tombol Navigasi Kanan -->
    <button class="nav-btn nav-right">&gt;</button>

  </div>

  <style>
    .testimonial-text {
      font-family: 'Georgia', serif;
      line-height: 1.5;
      color: #333;
    }
    .bisikan-section .card:hover {
      transform: translateY(-5px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .nav-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: none;
      background-color: #fff0f5;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10;
      cursor: pointer;
    }
    .nav-left { left: 0; }
    .nav-right { right: 0; }
    .nav-btn:hover { background-color: #ffccf2; }
  </style>

  <script>
    const slider = document.querySelector('.bisikan-slider');
    const leftBtn = document.querySelector('.nav-left');
    const rightBtn = document.querySelector('.nav-right');

    leftBtn.addEventListener('click', () => slider.scrollBy({ left: -300, behavior: 'smooth' }));
    rightBtn.addEventListener('click', () => slider.scrollBy({ left: 300, behavior: 'smooth' }));

    // Update total bisikan otomatis
    document.getElementById('total-bisikan').innerText = slider.children.length;
  </script>
</section>


    <br>

    <!-- Menambahkan Footer -->
    <?= $this->include('layouts/footer') ?>
  </main>
</body>

<script>
  const leftBtn = document.querySelector('.nav-left');
  const rightBtn = document.querySelector('.nav-right');
  const slider = document.querySelector('.bisikan-section .d-flex');

  leftBtn.addEventListener('click', () => {
    slider.scrollBy({ left: -300, behavior: 'smooth' });
  });
  rightBtn.addEventListener('click', () => {
    slider.scrollBy({ left: 300, behavior: 'smooth' });
  });

  // Update total bisikan otomatis
  document.getElementById('total-bisikan').innerText = slider.children.length;
</script>

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