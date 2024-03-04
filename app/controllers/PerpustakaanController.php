<?php 
class PerpustakaanController extends Controller
{
  public function __construct()
  {
    /**
      * Batasi hak akses hanya untuk peminjam
      * Selain peminjam akan langsung diarahkan kembali ke halaman home
    */
    if ($_SESSION['role'] !== 'Peminjam') {
      echo "<script>alert('Maaf, Anda tidak boleh mengakses halaman ini '); window.location.href = 'http://localhost/ukkfinal/';</script>";
    }
  }

  public function index()
  {
    $data = $this->model('KBRelasi')->get();
    $this->view('perpustakaan/home', $data);
  }

  public function detailbuku($id)
  {
    $this->view('perpustakaan/buku', [
      'buku'    => $this->model('Buku')->getById($id),
      'ulasan'  => $this->model('UlasanBuku')->getByBookID($id)
    ]);
  }

  public function ulasanbuku($id)
  {
    $data = $this->model('Buku')->getById($id);
    $this->view('perpustakaan/ulasan', $data);
  }

  public function ulasanstore()
{
    if ($this->model('Ulasanbuku')->create([
      'UserID'      => $_POST['UserID'],
      'BukuID'      => $_POST['BukuID'],
      'Ulasan'      => $_POST['Ulasan'],
      'Rating'      => $_POST['Rating'],
    ]) > 0) {
      echo "<script>alert('Selamat, Ulasan Berhasil di Tambahkan'); window.location.href = 'http://localhost/ukkfinal/perpustakaan/".$_POST['BukuID']."/detailbuku';</script>";
    } else {
      echo "<script>alert('Maaf, Ulasan gagal di Tambahkan'); window.location.href = 'http://localhost/ukkfinal/perpustakaan/".$_POST['BukuID']."/detailbuku';</script>";
    }
}

}