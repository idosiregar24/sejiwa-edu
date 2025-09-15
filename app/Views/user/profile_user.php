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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cover-photo {
            background: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            height: 250px;
            position: relative;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #fff;
            margin-top: -60px;
        }

        .profile-section {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
        }

        .stats span {
            display: block;
            font-weight: bold;
            font-size: 18px;
        }

        .stats small {
            color: gray;
        }

        .tabs-nav a {
            font-weight: bold;
            color: #a64ca6;
            margin-right: 20px;
            text-decoration: none;
        }

        .tabs-nav a.active {
            border-bottom: 2px solid #a64ca6;
            padding-bottom: 4px;
        }
    </style>
</head>

<body>
    <main>
        <!-- Menambahkan Navbar -->
        <?= $this->include('layouts/navbar') ?>
        <div class="cover-photo"></div>
        <div class="container mt-3">
            <div class="row">
                <!-- Profile Left -->
                <div class="col-md-3 text-center profile-section">
                    <img src="https://img.freepik.com/free-vector/mother-holding-baby-illustration_23-2148522372.jpg" class="profile-img" alt="profile">
                    <h5 class="mt-3"><?= esc($profile['name'] ?? '-') ?></h5>
                    <p class="text-muted"><?= esc($profile['email'] ?? '-') ?></p>

                    <div class="d-flex justify-content-around stats my-3">
                        <div>
                            <span>122</span>
                            <small>followers</small>
                        </div>
                        <div>
                            <span>67</span>
                            <small>following</small>
                        </div>
                        <div>
                            <span>37K</span>
                            <small>likes</small>
                        </div>
                    </div>

                    <p class="fst-italic">"Ibu dari anak berkebutuhan khusus yang ingin berbagi pengalaman dan saling mendukung sesama ibu."</p>

                    <ul class="list-unstyled text-start">
                        <li><i class="bi bi-envelope"></i><?= esc($profile['email'] ?? '-') ?></li>
                        <li><i class="bi bi-telephone"></i> +62-812-3456-7890</li>
                        <li><i class="bi bi-geo-alt"></i> Jakarta Selatan, DKI Jakarta</li>
                        <li><i class="bi bi-heart"></i> Autism Spectrum Disorder</li>
                    </ul>

                    <div class="d-grid gap-2 mt-3">
                        <a href="<?= base_url('profile/edit') ?>" class="btn btn-outline-secondary btn-sm">
                            Edit Profil
                        </a>
                        <button class="btn btn-primary btn-sm">Add Friends</button>
                    </div>
                </div>

                <!-- Post Right -->
                <div class="col-md-9">
                    <div class="tabs-nav mb-3">
                        <a href="#" class="active">Postingan</a>
                        <a href="#">Likes</a>
                        <a href="#">Simpan</a>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-4 col-sm-6">
                            <img src="https://source.unsplash.com/400x300/?office" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <img src="https://source.unsplash.com/400x300/?dining" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <img src="https://source.unsplash.com/400x300/?balcony" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <img src="https://source.unsplash.com/400x300/?library" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <img src="https://source.unsplash.com/400x300/?chandelier" class="img-fluid rounded">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <img src="https://source.unsplash.com/400x300/?apartment" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menambahkan Navbar -->
        <?= $this->include('layouts/footer') ?>
    </main>
</body>


</html>