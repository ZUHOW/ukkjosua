<?php 
use Dompdf\Dompdf;

class PeminjamController extends Controller
{
    public function __construct()
    {
        if ($_SESSION['role'] !== 'Administrator' && $_SESSION['role'] !== 'Petugas') {
            echo "<script>alert('Maaf, Anda tidak boleh mengakses halaman ini '); window.location.href = 'http://localhost/ukkfinal/';</script>";
        }
    }

    public function index()
    {
        $data = $this->model('Peminjaman')->get();
        $this->view('peminjam/home', $data);
    }

    public function cetakPeminjam()
    {
        $data = $this->model('Peminjaman')->get();
        $html = "<center>";
        $html .= "<h1>SMK Telkom 1 Medan</h1>";
        $html .= "<h2>PERPUSTAKAAN DIGITAL</h2>";
        $html .= "<h3>DAFTAR PEMINJAMAN BUKU</h3>";
        $html .= "<hr>";
        $html .= "<table align='center' border='1' cellpadding='10' cellspacing='0'>";
        $html .= "<tr><th>No</th><th>Peminjaman ID</th><th>Username</th><th>Judul</th><th>Buku Id</th><th>Tanggal Peminjaman</th><th>Tanggal Pengembalian</th><th>Status Peminjaman</th></tr>";
        $no = 1;
        foreach ($data as $peminjaman) {
            $html .= "<tr>";
            $html .= "<td>" . $no . "</td>";
            $html .= "<td>" . $peminjaman['PeminjamanID'] . "</td>";
            $html .= "<td>" . $peminjaman['Username'] . "</td>";
            $html .= "<td>" . $peminjaman['Judul'] . "</td>";
            $html .= "<td>" . $peminjaman['BukuID'] . "</td>";
            $html .= "<td>" . $peminjaman['TanggalPeminjaman'] . "</td>";
            $html .= "<td>" . $peminjaman['TanggalPengembalian'] . "</td>";
            $html .= "<td>" . $peminjaman['StatusPeminjaman'] . "</td>";
            $html .= "</tr>";
            $no++;
        }
        $html .= "</table>";
        $html .= "</center>";
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('4A', 'potrait');
        $dompdf->render();
        $dompdf->stream('Data Peminjaman', ['Attachment' => 0]);
    }
}