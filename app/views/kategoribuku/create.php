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

  <div class="col-md-6 mx-auto">
      <div class="card card-primary">
          <h1>Tambah Kategori Buku</h1>
          <div class="card-body">
              <form action="<?= urlTo('/kategoribuku/store'); ?>" method="post">
                  <div class="form-group">
                      <label for="NamaKategori">Nama Kategori</label>
                      <input type="text" id="NamaKategori" name="NamaKategori" class="form-control" required>
                  </div>

                  <div class="form-group">
                      <a href="<?= urlTo('/kategoribuku'); ?>" class="btn btn-danger">Batal</a>
                      <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
