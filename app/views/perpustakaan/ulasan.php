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

  .btn {
    margin-top: 10px;
  }

</style>
<div class="col-md-6 mx-auto">
  <div class="card card-primary">
    <div class="card-body">
    <h1>Berikan Ulasan</h1>
      <form action="<?= urlTo('/perpustakaan/ulasanstore'); ?>" method="post">
        <input type="hidden" name="UserID" value="<?= $_SESSION['UserID']; ?>">
        <input type="hidden" name="BukuID" value="<?= $data['BukuID']; ?>">
        <div class="form-group">
          <label for="Judul">Judul Buku</label>
          <input type="text" id="Judul" class="form-control"
          value="<?= $data['Judul'] ?>" readonly>
        </div>
        
        <div class="form-group">
          <label for="Penulis">Penulis</label>
          <input type="text" id="Penulis" class="form-control" 
          value="<?= $data['Penulis'] ?>" readonly>
        </div>
        
        <div class="form-group">
          <label for="Ulasan">Ulasan</label>
          <input type="text" id="Ulasan" name="Ulasan" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="Rating">Rating</label>
          <select name="Rating" id="Rating" class="form-control">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
        </div>
      
        <div class="form-group">
          <a href="<?= urlTo('/perpustakaan/'. $data['BukuID'] .'/detailbuku'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Tambah Ulasan</button>
        </div>
      </form>
    </div>
  </div>
</div>  