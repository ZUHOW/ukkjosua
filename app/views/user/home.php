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
                    <h1>Data User</h1>
                    <div class="float-right">
                    </div>
                    <a href="<?= urlTo('/user/create'); ?>" class="btn btn-primary btn-sm ">Tambah Data Petugas</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Role</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $user): ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $user['NamaLengkap']; ?></td>
                                        <td><?= $user['Email']; ?></td>
                                        <td><?= $user['Alamat']; ?></td>
                                        <td><?= $user['Role']; ?></td>
                                        <td>
                                            <?php if($user['Role'] === 'Petugas'): ?>
                                                <a href="<?= urlTo('/user/'.$user['UserID'].'/edit') ?>" class="btn btn-warning btn-sm mb-2">
                                                    Edit
                                                </a>
                                            <?php endif ?>

                                            <?php if($user['Role'] !== 'Administrator'): ?>
                                                <a href="<?= urlTo('/user/'.$user['UserID'].'/delete') ?>" class="btn btn-danger btn-sm mb-2">
                                                    Delete
                                                </a>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
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
