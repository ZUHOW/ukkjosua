<?php include '../app/views/alaat/navbar.php'; ?>
<style>
    .welcome-box {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: darkcyan;
        font-weight: bold; /* Membuat teks menjadi bold */
        border-radius: 5px;
        text-align: center;
        animation: fadeIn 2s ease-in-out;
    }

    .welcome-box:hover {
        background-color: black; /* Mengubah warna latar belakang saat mouse hover */
        color: blueviolet; /* Mengubah warna teks saat mouse hover */
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5); /* Menambahkan efek bayangan yang lebih besar saat mouse hover */
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(4.3);
        }
        100% {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }
</style>
<?php if(isset($_SESSION['username'])): ?>
    <div class="welcome-box">
        <span class="nav-link text-white">Selamat Datang, <?= $_SESSION['username']; ?> (Role: <?= $_SESSION['role']; ?>)</span>
    </div>
<?php endif; ?>
