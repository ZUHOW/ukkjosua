<?php 
class KoleksiController extends Controller
{
  public function __construct()
  {
    /**
      * Batasi hak akses hanya untuk peminjam
      * Selain peminjam akan langsung diarahkan kembali ke halaman home
    **/
    if ($_SESSION['role'] !== 'Peminjam') {
      echo "<script>alert('Maaf, Anda tidak boleh mengakses halaman ini '); window.location.href = 'http://localhost/ukkfinal/';</script>";

    }
  }

  public function index()
  {
    $data = $this->model('Koleksi')->get();
    $this->view('koleksi/home', $data);
  }

  public function store() 
  {
    if ($this->model('Koleksi')->create([
      'UserID'  => $_POST['UserID'],
      'BukuID'  => $_POST['BukuID']
    ]) > 0) {
      echo "<script>alert('Buku berhasil di tambahkan ke koleksi'); window.location.href = 'http://localhost/ukkfinal/koleksi';</script>";
    } else {
      echo "<script>alert('Buku berhasil di tambahkan ke koleksi'); window.location.href = 'http://localhost/ukkfinal/perpustakaan;</script>";

    }
  }

  public function delete($id)
	{
		if ($this->model('Koleksi')->delete($id) > 0) {
      echo "<script>alert('Buku berhasil di hapus dari koleksi'); window.location.href = 'http://localhost/ukkfinal/koleksi';</script>";
		}
	}
}
