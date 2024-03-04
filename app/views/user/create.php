<?php include '../app/views/alaat/navbar.php'; ?>
<style>
    /* Gaya untuk kartu (card) */
    .card {
        margin: 20px 0;
        border-radius: 10px;
        box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        background: rgba(255, 255, 255, 0.3); /* Latar belakang transparan */
        backdrop-filter: blur(10px); /* Efek blur */
    }

    .card:hover {
        transform: translateY(-7px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        margin-bottom: 20px;
        background-color: rgba(0, 0, 0, 0.3); /* Atur warna latar belakang untuk header dengan alpha untuk transparansi */
        color: #ffffff; /* Atur warna teks untuk header */
        border-bottom: 1px solid #ffffff; /* Tambahkan border untuk efek pemisahan yang bagus */
    }

    /* Atur margin-top pada form-group yang berisi tombol "Batal" dan "Tambah Data" */
    .form-group {
        margin-top: 15px; /* Sesuaikan nilai sesuai kebutuhan */
    }

    h1 {
        text-align: center;
        padding-top: 10px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-primary">
                <h1>Tambah Petugas</h1>
                <div class="card-body">
                    <form action="<?= urlTo('/user/store'); ?>" method="post">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" id="Username" name="Username" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" id="Email" name="Email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="NamaLengkap">Nama Lengkap</label>
                            <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" id="Alamat" name="Alamat" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" id="Password" name="Password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Konfirmasi_Password">Konfirmasi Password</label>
                            <input type="password" id="Konfirmasi_Password" name="Konfirmasi_Password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <a href="<?= urlTo('/user'); ?>" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
