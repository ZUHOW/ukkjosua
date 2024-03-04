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
<div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h3 class="profile-username text-center"><?= $data['buku']['Judul']; ?></h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Penulis :</b> 
                    <label class="teks"><?= $data['buku']['Penulis']; ?></label>
                  </li>
                  <li class="list-group-item">
                    <b>Penerbit :</b> 
                    <label class="teks"><?= $data['buku']['Penerbit']; ?></label>
                  </li>
                  <li class="list-group-item">
                    <b>TahunTerbit :</b> 
                    <label class="teks"><?= $data['buku']['TahunTerbit']; ?></label>
                  </li>
                  <li class="list-group-item">
                    <b>Deskripsi :</b> 
                    <label class="teks"><?= $data['buku']['Deskripsi']; ?></label>
                  </li>
                  
                  <a href="<?= urlTo('/buku'); ?>"
                  class="btn btn-danger btn-block">
                    <b>Kembali</b>
                  </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
            	<div class="card-header">
            		<h4>Ulasan</h4>
            	</div>

            	<div class="card-body">
            		<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Pemberi Ulasan</th>
                    <th>Rating</th>
                    <th>Ulasan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data['ulasan'] as $ulasan): ?>
                    <tr>
                      <td><?= $ulasan['NamaLengkap']; ?></td>
                      <td><?= $ulasan['Rating']; ?></td>
                      <td><?= $ulasan['Ulasan']; ?></td>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
            	</div>
            </div>
          </div>
        </div>
      </div>