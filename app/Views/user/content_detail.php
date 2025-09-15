<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Content Sejiwa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/detail_content.css') ?>">

  </head>
<body class="bg-light">

    <!-- Menambahkan Navbar -->
    <?= $this->include('layouts/navbar') ?>

<div class="container-fluid p-0 mb-5">
  <!-- HERO SECTION -->
  <div class="hero position-relative" 
       style="background: url('<?= base_url($content['thumbnail']) ?>') center/cover no-repeat; height: 400px;">
    
    <!-- Overlay gradasi -->
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" 
         style="background: linear-gradient(to top, rgba(92,0,102,0.7), rgba(0,0,0,0.3));">
    </div>
    
    <!-- Konten -->
    <div class="hero-content position-absolute bottom-0 start-0 text-white p-5 w-100">
      <span class="badge bg-light text-dark mb-2">Series</span>
      <h1 class="fw-bold"><?= esc($content['title']) ?></h1>
      <p class="small text-white-50 mb-3">
        9 Modul • 2025 • <?= esc($content['category']) ?> • Kesehatan Mental
      </p>
      
      <div class="d-flex gap-3 mb-3">
        <button class="btn btn-outline-light rounded-pill px-4">
          <i class="bi bi-play-circle me-2"></i> Continue Watching
        </button>
        <button class="btn btn-light rounded-pill px-4">
          <i class="bi bi-plus-circle me-2"></i> Add Watchlist
        </button>
      </div>
      
      <div class="d-flex align-items-center gap-4">
        <a href="#" class="text-decoration-none text-white">
          <i class="bi bi-share me-1"></i> Share
        </a>
        <a href="#" class="text-decoration-none text-white">
          <i class="bi bi-heart me-1"></i> <?= $content['like_count'] ?? 0 ?> Like
        </a>
      </div>
    </div>
  </div>
</div>


<!-- <div class="container">
    <div class="row g-5">
        <div class="col-lg-8">
            <div class="card card-custom p-4 mb-4">
                <h5 class="fw-bold">Story Line</h5>
                <p class="text-muted small">The Last of Us is an American post-apocalyptic drama television series created by Craig Mazin and Neil Druckmann for HBO. Based on the 2013 video game of the same name developed by Naughty Dog, it is set thirty years into a pandemic caused by a mass fungal infection, which creates zombie-like creatures and a collapse society. The series follows Joel (Pedro Pascal), a smuggler tasked with escorting the immune teenage Ellie (Bella Ramsey) across the post-apocalyptic United States.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-custom p-4 mb-4">
                <h5 class="fw-bold">Top Cast</h5>
                <div class="d-flex flex-wrap justify-content-start gap-4 mt-3">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/80" class="rounded-circle mb-1 cast-img" alt="Pedro Pascal">
                        <small class="d-block">Pedro Pascal</small>
                    </div>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/80" class="rounded-circle mb-1 cast-img" alt="Bella Ramsey">
                        <small class="d-block">Bella Ramsey</small>
                    </div>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/80" class="rounded-circle mb-1 cast-img" alt="Anna Torv">
                        <small class="d-block">Anna Torv</small>
                    </div>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/80" class="rounded-circle mb-1 cast-img" alt="Ashley Johnson">
                        <small class="d-block">Ashley Johnson</small>
                    </div>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/80" class="rounded-circle mb-1 cast-img" alt="Nick Offerman">
                        <small class="d-block">Nick Offerman</small>
                    </div>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/80" class="rounded-circle mb-1 cast-img" alt="Nico Parker">
                        <small class="d-block">Nico Parker</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5">
        <h4 class="fw-bold mb-3">Ruang Edukasi Video Sejiwa</h4>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4">
            <div class="col">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top-video" alt="...">
                    <div class="card-body p-2">
                        <h6 class="card-title fw-semibold small">Mengatasi Stress, Merawat Jiwa</h6>
                        <p class="text-muted small mb-0"><i class="bi bi-star-fill text-warning me-1"></i> 4.5 | Talk Session</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top-video" alt="...">
                    <div class="card-body p-2">
                        <h6 class="card-title fw-semibold small">Kisah Kasih Ibu dan Anak</h6>
                        <p class="text-muted small mb-0"><i class="bi bi-star-fill text-warning me-1"></i> 4.6 | Parenting</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top-video" alt="...">
                    <div class="card-body p-2">
                        <h6 class="card-title fw-semibold small">Ruang Tenang: Meditasi Harian</h6>
                        <p class="text-muted small mb-0"><i class="bi bi-star-fill text-warning me-1"></i> 4.7 | Talk Session</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top-video" alt="...">
                    <div class="card-body p-2">
                        <h6 class="card-title fw-semibold small">Membangun Ketahanan Psikologis</h6>
                        <p class="text-muted small mb-0"><i class="bi bi-star-fill text-warning me-1"></i> 4.8 | Self-Care</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top-video" alt="...">
                    <div class="card-body p-2">
                        <h6 class="card-title fw-semibold small">Jaga Diri: Tips Cepat Mengatasi Red Hair</h6>
                        <p class="text-muted small mb-0"><i class="bi bi-star-fill text-warning me-1"></i> 4.4 | Talk Session</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom overflow-hidden">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top-video" alt="...">
                    <div class="card-body p-2">
                        <h6 class="card-title fw-semibold small">Ibu: Tangis dan Tawa Ibu Hebat</h6>
                        <p class="text-muted small mb-0"><i class="bi bi-star-fill text-warning me-1"></i> 4.9 | Parenting</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5">
        <h4 class="fw-bold mb-3">Ruang Artikel Sejiwa</h4>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card card-custom h-100 overflow-hidden">
                    <img src="https://via.placeholder.com/800x600" class="card-img-top article-card-img-main" alt="...">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">Architecture</span>
                        <h5 class="fw-bold">Building on the corner of the sea</h5>
                        <p class="card-text text-muted small">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column gap-3">
                    <div class="card card-custom">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://via.placeholder.com/400x300" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge bg-secondary mb-2">Psychology</span>
                                    <h5 class="fw-bold">Pink stairs leading to the sky</h5>
                                    <p class="card-text text-muted small">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-custom">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://via.placeholder.com/400x300" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge bg-secondary mb-2">Inspiration</span>
                                    <h5 class="fw-bold">Building on the corner of the sea</h5>
                                    <p class="card-text text-muted small">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-custom">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://via.placeholder.com/400x300" class="img-fluid rounded-start h-100" style="object-fit: cover;" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="badge bg-secondary mb-2">Health</span>
                                    <h5 class="fw-bold">The color of the sun for breakfast</h5>
                                    <p class="card-text text-muted small">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5">
        <h4 class="fw-bold mb-3">Ruang Infografis Sejiwa</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card card-custom p-3 h-100">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top infografis-card-img" alt="...">
                    <div class="card-body p-0 pt-3">
                        <h6 class="fw-semibold">John Lewis to make final journey across famous Selma bridge</h6>
                        <p class="text-muted small">The body of the late US Rep. John Lewis on Sunday will retrace the civil rights icon's historic 1965 march in Selma, Alabama, where he helped lead a march for voting rights in 1965.</p>
                        <div class="d-flex align-items-center justify-content-between small text-muted">
                            <span>2 hours ago</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-heart me-1"></i> 14 | <i class="bi bi-chat me-1 ms-2"></i> 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom p-3 h-100">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top infografis-card-img" alt="...">
                    <div class="card-body p-0 pt-3">
                        <h6 class="fw-semibold">John Lewis, civil rights giant, crosses historic Selma bridge for final time</h6>
                        <p class="text-muted small">Solomon crowds watch as Lewis, who died on July 17 at age 80, is carried by horse-drawn hearse over the Edmund Pettus Bridge.</p>
                        <div class="d-flex align-items-center justify-content-between small text-muted">
                            <span>4 hours ago</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-heart me-1"></i> 14 | <i class="bi bi-chat me-1 ms-2"></i> 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom p-3 h-100">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top infografis-card-img" alt="...">
                    <div class="card-body p-0 pt-3">
                        <h6 class="fw-semibold">John Lewis, civil rights giant, crosses historic Selma bridge for final time</h6>
                        <p class="text-muted small">Solomon crowds watch as Lewis, who died on July 17 at age 80, is carried by horse-drawn hearse over the Edmund Pettus Bridge.</p>
                        <div class="d-flex align-items-center justify-content-between small text-muted">
                            <span>4 hours ago</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-heart me-1"></i> 14 | <i class="bi bi-chat me-1 ms-2"></i> 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <!-- Menambahkan Footer -->
    <?= $this->include('layouts/footer') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>