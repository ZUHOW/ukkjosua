<?php include '../app/views/alaat/navbar.php'; $no = 1; ?>
<style>
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
    .btn-success {
        background-color: greenyellow;
        color: black;
        border: 1px solid #3498db;
        border-radius: 20px;
        margin-top: 2px;
        padding: 10px 20px;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.4s;
        cursor: pointer;
    }

    .btn-success:hover {
        background-color: blueviolet;
        transform: scale(1.20);
    }

    .btn-success:active {
        transform: scale(0.95);
    }
    

    .table-bordered {
        border: 10px solid #dee2e6;
    }
    
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1>Data Peminjam</h1>
                    <div class="float-right">
                        <a href="<?= urlTo('/peminjam/cetakpeminjam'); ?>" class="btn btn-success">Cetak Laporan</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive"> <!-- Make the table responsive -->
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>Alamat Peminjam</th>
                                <th>Buku Yang di Pinjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal di Kembalikan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $k): ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $k['NamaLengkap']; ?></td>
                                    <td><?= $k['Alamat']; ?></td>
                                    <td><?= $k['Judul']; ?></td>
                                    <td><?= $k['TanggalPeminjaman']; ?></td>
                                    <td><?= $k['TanggalPengembalian']; ?></td>
                                    <td><?= $k['StatusPeminjaman']; ?></td>
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
