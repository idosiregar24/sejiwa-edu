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

        <section class="content-section">
            <div class="section-header">
                <h2>Ruang Edukatif Sejiwa</h2>
                <div class="subtitle">
                    <h5>Tempat teduh untuk ibu belajar, mengenal, dan memahami dengan kasih</h5>
                    <a href="#">See All</a>
                </div>
            </div>
            <div class="horizontal-scroll-container">
                <div class="slider-container">
                            <!-- <button class="btn left" onclick="slideLeft()">&#10094;</button> -->
                            <div class="slider" id="slider">
                            <div class="content-card">
                                <div class="container py-4">
                                    <div class="row">
                                <?php if (!empty($videos)): ?>
                                    <?php foreach ($videos as $video): ?>
                                        <div class="col-md-4 mb-3">
                                            <div class="content-card">
                                                <video width="100%" height="200" controls>
                                                    <source src="<?= base_url('uploads/videos/' . $video['path']) ?>" type="video/mp4">
                                                    Browser Anda tidak mendukung pemutar video.
                                                </video>
                                                <h3><?= esc($video['title']) ?></h3>
                                                <p><?= esc($video['description']) ?></p>
                                                <span>⭐️ <?= esc($video['rating']) ?> | <?= esc($video['tag']) ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p>Belum ada video yang dipublish.</p>
                                <?php endif; ?>
                            </div>

                            </div>
                            </div>
                        <!-- <button class="btn right" onclick="slideRight()">&#10095;</button> -->
                    </div>
        </section>
<!-- 
        <section class="bisikan-bunda-section">
            <div class="section-header">
                <h2>Bisikan Bunda</h2>
            </div>
            <div class="quote-card">
                <p>"Saat dunia terasa terlalu terang, terlalu keras, atau terlalu cepat, pelukan yang menenangkan dari orang yang kita cintai terasa seperti rumah."</p>
                <h4>Dazzle Healer</h4>
                <p>Front End Developer</p>
            </div>
        </section>

        <section class="content-section">
            <div class="section-header">
                <h2>Teduh Jiwa</h2>
                <a href="#">See All</a>
            </div>
            <div class="horizontal-scroll-container">
                <div class="content-card">
                    <img src="path/to/music-image1.jpg" alt="Musik 1">
                    <h3>Judul Musik 1</h3>
                    <span>Label</span>
                </div>
                <div class="content-card">
                    <img src="path/to/music-image2.jpg" alt="Musik 2">
                    <h3>Judul Musik 2</h3>
                    <span>Label</span>
                </div>
                </div>
        </section> -->
    </main>

    <!-- <footer>
        <div class="footer-links">
            <a href="#">Home</a>
            <a href="#">Find a Therapist</a>
            <a href="#">My Concerns</a>
            <a href="#">About</a>
            <a href="#">Register with us</a>
            <a href="#">Contact us</a>
            <a href="#">Sitemap</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Sejiwa. All right reserved</p>
            <div class="social-icons">
                <a href="#"><img src="path/to/twitter.svg" alt="Twitter"></a>
                <a href="#"><img src="path/to/instagram.svg" alt="Instagram"></a>
            </div>
            <p class="developer-credit">Design & Developed by Idex Solutions</p>
        </div>
    </footer> -->

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


</html>