<?php include '../app/views/alaat/navbar.php'; ?>
<style>
  /* Gaya untuk kartu */
  .card {
        margin: 20px 0;
        border-radius: 10px;
        box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        background: rgba(255, 255, 255, 0.3); /* Latar belakang transparan */
        backdrop-filter: blur(10px); /* Efek blur */
    }

  /* Gaya saat hover pada kartu */
  .card:hover {
    transform: translateY(-7px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  /* Margin atas untuk setiap form-group yang berisi tombol "Batal" dan "Tambah Data" */
  .form-group {
    margin-top: 15px; /* Sesuaikan nilai sesuai kebutuhan */
  }

  /* Gaya untuk judul */
  h1 {
    text-align: center;
    padding-top: 10px;
  }

  /* Gaya untuk header kartu pada halaman data user */
  .card-header {
    margin-bottom: 20px;
    background-color: rgba(0, 0, 0, 0.3); /* Set warna latar untuk header dengan alpha untuk transparansi */
    color: #ffffff; /* Set warna teks untuk header */
    border-bottom: 1px solid #ffffff; /* Tambahkan border untuk efek pemisahan yang bagus */
  }
</style>

<div class="col-md-6 mx-auto">
  <div class="card card-primary">
    <h1>Edit Petugas</h1>
    <div class="card-body">
      <form action="<?= urlTo('/user/'.$data['UserID'].'/update'); ?>" method="post">
        <div class="form-group">
          <label for="Username">Username</label>
          <input type="text" id="Username" name="Username" class="form-control" value="<?= $data['Username']; ?>" readonly>
        </div>

        <div class="form-group">
          <label for="Email">Email</label>
          <input type="email" id="Email" name="Email" class="form-control" value="<?= $data['Email']; ?>" required>
        </div>

        <div class="form-group">
          <label for="NamaLengkap">NamaLengkap</label>
          <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" value="<?= $data['NamaLengkap']; ?>" required>
        </div>

        <div class="form-group">
          <label for="Alamat">Alamat</label>
          <input type="text" id="Alamat" name="Alamat" class="form-control" value="<?= $data['Alamat']; ?>" required>
        </div>

        <div class="form-group">
          <a href="<?= urlTo('/user'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
