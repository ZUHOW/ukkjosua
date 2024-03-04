<?php include '../app/views/alaat/navbar.php'; $no = 1; ?>
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
          <div class="col-12">
            <div class="card">
            <h1>Daftar Buku Pinjaman</h1>
              <div class="card-body">
              <div class="table-responsive"> <!-- Make the table responsive -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal di Kembalikan</th>
                    <th>Status</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $buku): ?>
                  	<tr>
                  		<td><?= $no; ?></td>
                  		<td><?= $buku['Judul']; ?></td>
                  		<td><?= $buku['TanggalPeminjaman']; ?></td>
                  		<td><?= $buku['TanggalPengembalian']; ?></td>
                  		<td><?= $buku['StatusPeminjaman']; ?></td>
                      <td>
                      <a href="<?= urlTo('/peminjaman/'.$buku['BukuID'].'/detailbuku') ?>" class="btn btn-info btn-sm mb-2">
                    Detail
                </a>
                        <?php if($buku['StatusPeminjaman'] === 'Belum di Kembalikan'): ?>
                          <form action="<?= urlTo('/peminjaman/'.$buku['PeminjamanID'].'/kembalikan') ?>" method="post">
                          <input type="hidden" name="TanggalPengembalian" value="<?= date('Y-m-d'); ?>">
                          <input type="hidden" name="StatusPeminjaman" value="Sudah di Kembalikan">
                            <button class="btn btn-primary">Kembalikan</button>
                          </form>
                        <?php endif ?>
                      </td>
                  	</tr>
                  	<?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>