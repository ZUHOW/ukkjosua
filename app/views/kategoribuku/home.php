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


    /* Gaya tombol kustom */
    .btn-primary {
        background-color: #3498db;
        color: black;
        border: 1px solid #3498db;
        border-radius: 20px;
        margin-top: 2px;
        padding: 10px 20px;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.4s;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: blueviolet;
        transform: scale(1.20);
    }

    .btn-primary:active {
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
                    <h1>Data Kategori Buku</h1>
                    <div class="float-right">
                        <!-- Konten float-right jika diperlukan -->
                    </div>
                    <a href="<?= urlTo('/kategoribuku/create'); ?>" class="btn btn-primary float-right">
                        Tambah Kategori
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive"> <!-- Make the table responsive -->
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Tindakan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $k): ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $k['NamaKategori']; ?></td>
                                <td>
                                    <a href="<?= urlTo('/kategoribuku/'.$k['KategoriID'].'/edit') ?>"
                                       class="btn btn-warning btn-sm mb-2 ">
                                        Edit
                                    </a>
                                    <a href="<?= urlTo('/kategoribuku/'.$k['KategoriID'].'/delete') ?>"
                                       class="btn btn-danger btn-sm mb-2">
                                        Delete
                                    </a>
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
