<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intelligent Library | Login</title>
    <!-- Google Font: Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Custom Styles -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 100vh;
            margin: 0;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('https://64.media.tumblr.com/0fa488fe6ccfd2b65e7973159cf00a14/501b9516989ec5bd-91/s1280x1920/6b5206c3445e715d7153e41fda11a449c71a3ebf.gifv') center/cover no-repeat; /* Mengganti background GIF dengan warna solid */
            font-family: 'Poppins', sans-serif;
        }
        

        .login-box {
                width: 300px;
                background: rgba(255, 255, 255, 0.3); /* Menggunakan background transparan */
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Menambahkan shadow ringan */
                backdrop-filter: blur(10px); /* Menambahkan efek blur */
                margin: 0 auto;
                padding: 20px;
                color: white;
        }

        @keyframes loginBoxAnimation {
                0% {
                    transform: scale(0.4); /* Ukuran awal lebih kecil */
                    opacity: 0; /* Transparansi awal */
                }
                100% {
                    transform: scale(1); /* Ukuran akhir normal */
                    opacity: 1; /* Transparansi akhir normal */
                }
            }

            .login-box {
                animation: loginBoxAnimation 0.5s ease-out forwards; /* Menambahkan animasi */
            }


        .login-box-msg {
            font-size: 1.5em; /* Mengurangi font size */
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        .btn-primary {
            background-color: #3498db;
            color: #fff;
            border: 1px solid #3498db;
            border-radius: 20px;
            margin-top: 2px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.4s; /* Menambahkan transisi untuk background dan transform */
            cursor: pointer; /* Mengubah cursor menjadi pointer saat mouse diarahkan ke atas tombol */
        }

        .btn-primary:hover {
            background-color: blueviolet; /* Mengubah warna latar belakang saat mouse diarahkan ke atas */
            transform: scale(1.20); /* Menambahkan efek scale saat mouse diarahkan ke atas */
        }

        .btn-primary:active {
            transform: scale(0.95); /* Menambahkan efek scale saat tombol ditekan */
        }
        .input-group,
        .input-group-append {
            display: flex;
            justify-content: center;
            margin: 10px 0; /* Mengurangi margin */
        }

        .form-control {
            border: none;
            border-radius: 10px;
            padding: 10px; /* Mengurangi padding */
            width: 80%;
            font-size: 14px; /* Mengurangi font size */
            background-color: #fff;
            color: #333;
        }

        .form-control::placeholder {
            color: darkcyan;
        }

        .input-group-text {
            background-color: transparent;
            border: none;
            padding: 0;
            font-size: 20px; /* Mengurangi font size */
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col-12 {
            text-align: center;
        }

        .col-12 a {
            color: #3498db;
            text-decoration: none;
            font-size: large;
        }
    </style>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Selamat Datang</p>

                <form class="" action="<?= urlTo('/login/login'); ?>" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="Username" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" name="Password" placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Login   </button>
                            <p>Belum punya akun? <a href="<?= urlTo('/login/register'); ?>">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <?php if (isset($_COOKIE['alert'])): ?>
        <?php $data = unserialize($_COOKIE['alert']); ?>
        <script>
            Swal.fire({
                title: "<?= $data[1]; ?>",
                icon: "<?= $data[0]; ?>",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php endif ?>
</body>

</html>