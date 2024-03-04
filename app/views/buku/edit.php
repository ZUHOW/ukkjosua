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

</style>
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-body">
                    <h1 class="text-center mb-4">Edit Data Buku</h1>
                    <form action="<?= urlTo('/buku/' . $data['BukuID'] . '/update'); ?>" method="post">
                        <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input type="text" id="Judul" name="Judul" class="form-control"
                                value="<?= $data['Judul']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="Penulis">Penulis</label>
                            <input type="text" id="Penulis" name="Penulis" class="form-control"
                                value="<?= $data['Penulis']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="Penerbit">Penerbit</label>
                            <input type="text" id="Penerbit" name="Penerbit" class="form-control"
                                value="<?= $data['Penerbit']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="TahunTerbit">TahunTerbit</label>
                            <input type="number" id="TahunTerbit" name="TahunTerbit" class="form-control"
                                value="<?= $data['TahunTerbit']; ?>" required>
                        </div>

                

                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <textarea id="Deskripsi" name="Deskripsi" class="form-control"
                                rows="5"><?= $data['Deskripsi']; ?></textarea>
                        </div>

                        <div class="form-group">
                            <a href="<?= urlTo('/buku'); ?>" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary float-right">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
