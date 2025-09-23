<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard_user.css') ?>">
    <title>Dashboard SeJiwa</title>
</head>
<body>
    
<body>
    <main>
    <section class="hero-section">
        
    
    <!-- Menambahkan Navbar -->
    <?= $this->include('layouts/navbar') ?>

    
    <div class="hero-content">
                <h1>Sejiwa:</h1>
                <div class="subjudul">
                    <h1>Sentra Edukasi Jiwa Ibu Welas Asih</h1>
                </div>
                <h5><i> "Bersama Sejiwa, Tiap Ibu Punya Ruang Aman dan Hangat untuk Didengar dan Berdaya"</i></h5>
                <br>
                <button class="btn btn-about-2">Tentang Kami</button>
            </div>
            <div class="hero-image">
                <img src="<?= base_url('assets/img/ilustrasi_ibu_dan_anak.svg')?>" alt="Ilustrasi Ibu dan Anak"/>
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
        <a href="#" class="btn btn-outline-secondary btn-sm">See All <i class="bi bi-chevron-down"></i></a>
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
            <div class="card shadow-sm h-100" style="min-width: 350px; border-radius: 12px; overflow: hidden;">
              
              <!-- Thumbnail -->
              <a href="<?= base_url('content/view/'.$video['id']) ?>">
                  <img src="<?= base_url($video['thumbnail'] ?? 'assets/img/default-thumbnail.jpg') ?>"
                        class="card-img-top"
                        alt="<?= esc($video['title'] ?? 'No Title') ?>"
                        style="height:180px; object-fit:cover;">
              </a>
              
              <div class="card-body">
                <h6 class="fw-bold text-truncate mb-2">
                  <a href="<?= base_url('content/detail/'.$video['id']) ?>" 
                    class="title-content">
                    <?= esc($video['title']) ?>
                  </a>
                </h6>
                
                <div class="d-flex justify-content-between">
                <span class="text-muted small">
                    <i class="bi bi-heart-fill text-danger"></i> <?= $video['like_count'] ?? 0 ?>
                  </span>  
                <span class="badge bg-success"><?= esc($video['category']) ?></span>
                  
                </div>
              </div>
            </div>
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
                <img src="<?= base_url('assets/img/bisikan-bunda.svg')?>" alt="mom" class="bg-mom">

                <!-- Tombol Navigasi -->
                <button class="nav-btn nav-right">&gt;</button>
              </div>
          </section>

          <!-- Teduh Jiwa -->
          <section class="content-section py-4">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div>
                <h2 class="fw-bold">Teduh Jiwa</h2>        </div>
              <a href="#" class="btn btn-outline-secondary btn-sm">See All <i class="bi bi-chevron-down"></i></a>
            </div>

            <!-- Slider Section -->
            <div class="position-relative">
              <!-- Tombol kiri -->
              <button class="btn btn-light position-absolute top-50 start-0 translate-middle-y shadow rounded-circle"
                      onclick="slideLeft()" style="z-index:10">
                <i class="bi bi-chevron-left"></i>
              </button>

            <!-- Container Scroll Audio -->
           <div class="d-flex overflow-auto px-2" id="audioSlider" style="scroll-behavior:smooth; gap:1rem;">
            <?php if (!empty($audios)): ?>
                <?php foreach ($audios as $audio): ?>
                    <a href="<?= base_url('content/view/' . $audio['id']) ?>" 
                      class="text-decoration-none text-dark">
                        <div class="card shadow-sm" 
                            style="min-width:250px; flex:0 0 auto; border-radius:12px; overflow:hidden;">
                            
                            <!-- Thumbnail -->
                            <img src="<?= base_url($audio['thumbnail'] ?? 'assets/img/default-audio.png') ?>"
                                class="card-img-top"
                                alt="<?= esc($audio['title']) ?>"
                                style="height:150px; object-fit:cover;">

                            <!-- Body -->
                            <div class="card-body">
                                <h6 class="fw-bold text-truncate"><?= esc($audio['title'] ?? 'No Title') ?></h6>
                                <p class="card-text small text-muted text-truncate"><?= esc($audio['body'] ?? '-') ?></p>
                                <span class="badge bg-primary"><?= esc($audio['category'] ?? '-') ?></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-muted">Belum ada audio yang dipublish.</p>
            <?php endif; ?>
        </div>


        <!-- Tombol kanan -->
        <button class="btn btn-light position-absolute top-50 end-0 translate-middle-y shadow rounded-circle"
                onclick="slideRight()" style="z-index:10">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </section>

    <!-- Menambahkan Footer -->
    <?= $this->include('layouts/footer') ?>
  </main>
</body>




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
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".like-btn").forEach(btn => {
        let contentId = btn.dataset.id;

        // Load jumlah like saat halaman dibuka
        fetch(`/content/likes/${contentId}`)
            .then(res => res.json())
            .then(data => {
                btn.querySelector(".like-count").textContent = data.likes;
            });

        // Event klik tombol like
        btn.addEventListener("click", function() {
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