<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard_user.css') ?>">

    <title>Dashboard SeJiwa</title>
</head>
<body>

<body>
    <header>
            <nav class="navbar navbar-expand-lg bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('dashboard') ?>">Sejiwa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('dashboard') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">Komunitas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">About Us</a>
                    </li>
                </ul>
                
                    <div class="d-flex">
                            <?php if(session()->get('isLoggedIn')): ?>
                                <span class="me-3">Halo, <?= session()->get('name') ?></span>
                                <a href="<?= base_url('logout') ?>" class="btn btn-login">Logout</a>
                            <?php else: ?>
                                <a href="<?= base_url('login') ?>" class="btn btn-login">Login</a>
                                <a href="<?= base_url('register') ?>" class="btn btn-register">Register</a>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
            </nav>
    </header>

    <main>
        <section class="hero-section">
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
                <div class="content-card">
                    <img src="path/to/image1.jpg" alt="Konten 1">
                    <h3>Judul Konten 1</h3>
                    <p>Deskripsi singkat konten...</p>
                    <span>⭐️ 4.5 | Tag</span>
                </div>
                <div class="content-card">
                    <img src="path/to/image2.jpg" alt="Konten 2">
                    <h3>Judul Konten 2</h3>
                    <p>Deskripsi singkat konten...</p>
                    <span>⭐️ 4.5 | Tag</span>
                </div>
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
</html>