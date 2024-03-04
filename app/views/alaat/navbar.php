<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intelligent Library | <?= getTitle(); ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        body {
            height: 100vh;
            background:
            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
             url('https://64.media.tumblr.com/975d10cff3c6f6eeb852068eff52352f/b84534345dc9ae51-4d/s1280x1920/e83e47797bf47b49897050f5036366db3e76f17d.gifv') center/cover no-repeat fixed; /* Mengganti background GIF dengan warna solid */
        }


        .navbar {
            background-color: rgba(59, 58, 64, 0.6); /* Menggunakan background transparan */
            padding: 4px 0;
            backdrop-filter: blur(9x); /* Menambahkan efek blur */
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav {
            margin: 0 auto;
        }

        .navbar-nav .nav-link {
            color: white;
            margin: 0 15px;
            transition: color 0.1s ease, transform 0.11s ease;
            font-weight: bold; /* Make the text bold */
        }

        .navbar-nav .nav-link:hover {
            color: turquoise;
            transform: scale(1.05); /* Add a subtle scale effect on hover */
        }

        .navbar-toggler-icon {
            background-color: black;
        }

        @media (max-width: 768px) {
            .navbar-nav .nav-link {
                margin-right: 0;
            }
        }
    </style>
</head>
<body>

<div class="wrapper">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= menuActive(['home']); ?>" href="<?= urlTo('/') ?>">Home</a>
                    </li>
                    <?php if ($_SESSION['role'] === 'Administrator'): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['user']); ?>" href="<?= urlTo('/user'); ?>">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['kategoribuku']); ?>" href="<?= urlTo('/kategoribuku'); ?>">Kategori Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['buku']); ?>" href="<?= urlTo('/buku'); ?>">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['peminjam']); ?>" href="<?= urlTo('/peminjam'); ?>">Peminjam</a>
                        </li>
                    <?php endif ?>
                    <?php if ($_SESSION['role'] === 'Petugas'): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['kategoribuku']); ?>" href="<?= urlTo('/kategoribuku'); ?>">Kategori Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['buku']); ?>" href="<?= urlTo('/buku'); ?>">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['peminjam']); ?>" href="<?= urlTo('/peminjam'); ?>">Peminjam</a>
                        </li>
                    <?php endif ?>
                    <?php if ($_SESSION['role'] === 'Peminjam'): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['perpustakaan']); ?>" href="<?= urlTo('/perpustakaan'); ?>">Daftar Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['peminjaman']); ?>" href="<?= urlTo('/peminjaman'); ?>">Buku Pinjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= menuActive(['koleksi']); ?>" href="<?= urlTo('/koleksi'); ?>">Koleksi Pribadi</a>
                        </li>
                    <?php endif ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= urlTo('/login/logout') ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Your existing HTML content -->

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-qZ8mY7e8Zm+3QvqXBZtUKYEY/xXcyGAO4Z1nr75q8Gn3OixlJ6j9tG9aRVZEKxI1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>

</body>
</html>
