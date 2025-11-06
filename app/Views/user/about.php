<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Sejiwa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: linear-gradient(to right, #f8cdda, #f1a7f1);
      color: #333;
      padding: 80px 0;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    .card img {
      border-radius: 12px 12px 0 0;
    }
  </style>
</head>
<body>

  <!-- Menambahkan Navbar -->
    <?= $this->include('layouts/navbar') ?>


  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <h1>About Sejiwa</h1>
            <p class="lead">SEJIWA, singkatan dari Sentra Edukasi Jiwa Ibu Welas Asih, adalah sebuah
                            aplikasi berbasis web yang dirancang sebagai pusat dukungan mental, emosional, dan
                            edukatif untuk para ibu pascapersalinan dengan anak berkebutuhan khusus. Aplikasi ini
                            dikembangkan berdasarkan hasil penelitian sebelumnya yang menunjukkan bahwa
                            mayoritas ibu dalam kategori ini membutuhkan sarana yang mampu memberikan rasa
                            terhubung, mendapat informasi yang terpercaya, dan ruang untuk menenangkan diri dari
                            tekanan yang dihadapi setiap hari.
            </p>
        </div>
        <div class="col-md-6 text-center">
          <img src="<?= base_url('assets/img/ilustrasi_ibu_dan_anak.svg')?>" class="img-fluid rounded" alt="Sejiwa Team">
        </div>
      </div>
    </div>
  </section>

  <!-- Our Story -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Tujuan dan Latar Belakang</h2>
      <p class="text-center mb-5">Kesehatan mental ibu pascapersalinan merupakan isu krusial yang semakin
                                mendapat perhatian dalam berbagai kajian sosial dan medis. Namun, perhatian khusus
                                terhadap ibu-ibu yang memiliki anak berkebutuhan khusus (ABK) masih sangat terbatas,
                                padahal kelompok ini berada dalam kondisi yang jauh lebih rentan. Mereka tidak hanya
                                menghadapi tantangan umum dalam proses pemulihan fisik dan emosional pasca
                                persalinan, tetapi juga dihadapkan pada kompleksitas dalam merawat anak dengan
                                kebutuhan khusus yang menuntut perhatian, kesabaran, dan energi ekstra. Kondisi ini
                                sering kali menimbulkan beban mental berlapis yang bisa berujung pada stres kronis,
                                kelelahan emosional, dan bahkan depresi.</p>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="<?= base_url('assets/img/ilustrasi_ibu_dan_anak.svg')?>" class="card-img-top" alt="Mission">
            <div class="card-body">
              <h5 class="card-title">Tiga pilar utama layanan Sejiwa</h5>
              <p class="card-text">Komunitas dukungan daring (online community support)</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="<?= base_url('assets/img/ilustrasi_ibu_dan_anak.svg')?>" class="card-img-top" alt="Vision">
            <div class="card-body">
              <h5 class="card-title">Tiga pilar utama layanan Sejiwa</h5>
              <p class="card-text">Akses ke sumber daya kesehatan mental (mental health resources)</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="<?= base_url('assets/img/ilustrasi_ibu_dan_anak.svg')?>" class="card-img-top" alt="Values">
            <div class="card-body">
              <h5 class="card-title">Tiga pilar utama layanan Sejiwa</h5>
              <p class="card-text">Fitur relaksasi serta meditasi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Menambahkan Navbar -->
    <?= $this->include('layouts/footer') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
