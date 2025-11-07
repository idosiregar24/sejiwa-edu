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

    <?php if (session()->has('isLoggedIn') && session('isLoggedIn') == 1): ?>
      <!-- SECTION: Video hanya muncul jika user sudah login -->
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
                <a href="<?= base_url('content/view/' . $video['id']) ?>" class="text-decoration-none text-dark"
                  style="min-width: 350px;">
                  <div class="card shadow-sm h-100 rounded-3 overflow-hidden">
                    <img src="<?= base_url($video['thumbnail'] ?? 'assets/img/default-thumbnail.jpg') ?>"
                      class="card-img-top" alt="<?= esc($video['title'] ?? 'No Title') ?>"
                      style="height:180px; object-fit:cover; transition: transform 0.3s ease;">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <h6 class="fw-bold text-truncate mb-2"><?= esc($video['title']) ?></h6>
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

    <?php else: ?>
      <!-- SECTION: Tampilan untuk pengunjung belum login -->
      <section class="content-section py-5 text-center bg-light">
        <div class="container">
          <h2 class="fw-bold mb-3">Ruang Edukatif Sejiwa</h2>
          <p class="text-muted mb-4">
            Akses video edukatif hanya tersedia untuk pengguna yang sudah login.
            Silakan masuk untuk menjelajahi berbagai konten bermanfaat bagi para ibu.
          </p>
          <a href="<?= base_url('login') ?>" class="btn btn-primary">
            <i class="bi bi-box-arrow-in-right"></i> Login untuk Melihat Video
          </a>
        </div>
      </section>
    <?php endif; ?>


    <!-- Content Section -->
    <section class="Bisikan Ibu-section py-4">
      <div class="bisikan-section position-relative">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h2 class="fw-bold">Bisikan Ibu</h2>
            <h6 class="text-muted">Bisikan Ibu adalah fitur yang menampilkan pesan afirmasi dan refleksi positif dari
              sesama ibu pengguna, dirancang untuk memberikan dukungan emosional dan rasa kebersamaan.</h6>
          </div>
        </div>

        <!-- Tombol Navigasi Kiri -->
        <button class="nav-btn nav-left">&lt;</button>

        <!-- Slider Wrapper -->
        <div class="bisikan-slider-container">
          <div class="bisikan-slider d-flex overflow-auto pb-2">

            <!-- Card Example -->
            <div class="card testimonial-card shadow-sm">
              <div class="d-flex align-items-center p-3">
                <img src="https://i.pravatar.cc/100?img=32" alt="avatar" class="rounded-circle me-2">
                <div>
                  <h6 class="mb-0 fw-bold">Ibu Siti</h6>
                  <small class="text-muted">Guru TK</small>
                </div>
              </div>
              <hr class="my-2">
              <p class="testimonial-text p-3 mb-0">
                “Pelukanmu menjadi jeda yang menenangkan di hari yang penuh tantangan.”
              </p>
            </div>

            <div class="card testimonial-card shadow-sm">
              <div class="d-flex align-items-center p-3">
                <img src="https://i.pravatar.cc/100?img=33" alt="avatar" class="rounded-circle me-2">
                <div>
                  <h6 class="mb-0 fw-bold">Ibu Rina</h6>
                  <small class="text-muted">Ibu Rumah Tangga</small>
                </div>
              </div>
              <hr class="my-2">
              <p class="testimonial-text p-3 mb-0">
                “Saat lelah dan bingung, aku menemukan ketenangan di ruang kecil ini.”
              </p>
            </div>

            <div class="card testimonial-card shadow-sm">
              <div class="d-flex align-items-center p-3">
                <img src="https://i.pravatar.cc/100?img=33" alt="avatar" class="rounded-circle me-2">
                <div>
                  <h6 class="mb-0 fw-bold">Ibu Rina</h6>
                  <small class="text-muted">Ibu Rumah Tangga</small>
                </div>
              </div>
              <hr class="my-2">
              <p class="testimonial-text p-3 mb-0">
                “Saat lelah dan bingung, aku menemukan ketenangan di ruang kecil ini.”
              </p>
            </div>

            <div class="card testimonial-card shadow-sm">
              <div class="d-flex align-items-center p-3">
                <img src="https://i.pravatar.cc/100?img=33" alt="avatar" class="rounded-circle me-2">
                <div>
                  <h6 class="mb-0 fw-bold">Ibu Rina</h6>
                  <small class="text-muted">Ibu Rumah Tangga</small>
                </div>
              </div>
              <hr class="my-2">
              <p class="testimonial-text p-3 mb-0">
                “Saat lelah dan bingung, aku menemukan ketenangan di ruang kecil ini.”
              </p>
            </div>


          </div>
        </div>

        <!-- Tombol Navigasi Kanan -->
        <button class="nav-btn nav-right">&gt;</button>

        <!-- Background Image -->
        <img src="<?= base_url('assets/img/bisikan-bunda.svg') ?>" alt="mom" class="bg-mom">

      </div>

      <style>
        .bisikan-slider-container {
          padding: 0 50px;
        }

        .bisikan-slider {
          gap: 16px;
          scroll-behavior: smooth;
          -webkit-overflow-scrolling: touch;
          scrollbar-width: none;
          cursor: grab;
        }

        .bisikan-slider:active {
          cursor: grabbing;
        }

        .bisikan-slider::-webkit-scrollbar {
          display: none;
        }

        .testimonial-card {
          min-width: 280px;
          flex-shrink: 0;
          border-radius: 12px;
          overflow: hidden;
          background-color: #fff0f5;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .testimonial-card:hover {
          transform: translateY(-5px);
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .testimonial-text {
          font-family: Georgia, serif;
          line-height: 1.5;
          color: #333;
          font-style: italic;
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
          font-weight: bold;
          font-size: 20px;
        }

        .nav-btn:hover {
          background-color: #ffccf2;
        }

        .nav-left {
          left: 0;
        }

        .nav-right {
          right: 0;
        }

        .bg-mom {
          position: absolute;
          bottom: 0;
          right: 0;
          opacity: 0.2;
          width: 180px;
          z-index: 0;
        }
      </style>

      <script>
        document.addEventListener("DOMContentLoaded", () => {
          const slider = document.querySelector('.bisikan-slider');
          const leftBtn = document.querySelector('.nav-left');
          const rightBtn = document.querySelector('.nav-right');

          // Update total bisikan otomatis
          document.getElementById('total-bisikan').innerText = slider.children.length;

          // Tombol navigasi
          leftBtn.addEventListener('click', () => slider.scrollBy({ left: -300, behavior: 'smooth' }));
          rightBtn.addEventListener('click', () => slider.scrollBy({ left: 300, behavior: 'smooth' }));

          // Drag/swipe support
          let isDown = false;
          let startX;
          let scrollLeft;

          slider.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - slider.getBoundingClientRect().left;
            scrollLeft = slider.scrollLeft;
          });
          slider.addEventListener('mouseleave', () => isDown = false);
          slider.addEventListener('mouseup', () => isDown = false);
          slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.getBoundingClientRect().left;
            slider.scrollLeft = scrollLeft - (x - startX) * 1.5;
          });

          slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].pageX - slider.getBoundingClientRect().left;
            scrollLeft = slider.scrollLeft;
          });
          slider.addEventListener('touchmove', (e) => {
            const x = e.touches[0].pageX - slider.getBoundingClientRect().left;
            slider.scrollLeft = scrollLeft - (x - startX) * 1.5;
          });
        });
      </script>
    </section>

    <br>

    <!-- Menambahkan Footer -->
    <?= $this->include('layouts/footer') ?>
  </main>
</body>

<!-- Scroll Video Edukasi Ibu -->
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