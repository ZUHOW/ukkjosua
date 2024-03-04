<?php 
class PeminjamanController extends Controller
{
  public function index()
  {
    $data = $this->model('Peminjaman')->getPinjam();
    $this->view('peminjaman/home', $data);
  }

  public function pinjam($id)
  {
    $data = $this->model('Buku')->getById($id);
    $this->view('peminjaman/pinjam', $data);
  }

  public function store()
{
    if ($this->model('Peminjaman')->create([
      'UserID'              => $_SESSION['UserID'],
      'BukuID'              => $_POST['BukuID'],
      'TanggalPeminjaman'   => date('Y-m-d'),
      'StatusPeminjaman'    => 'Belum di Kembalikan'
    ]) > 0) {
      echo "<script>alert('Selamat, Buku berhasil di pinjam'); window.location.href = 'http://localhost/ukkfinal/peminjaman';</script>";
    } else {
      echo "<script>alert('Maaf, Buku gagal di pinjam'); window.location.href = 'http://localhost/ukkfinal/peminjaman';</script>";
    }
}


public function kembalikan($id)
{
    if ($this->model('Peminjaman')->update($id) > 0) {
        echo "<script>alert('Selamat, Buku berhasil di kembalikan!'); window.location.href = 'http://localhost/ukkfinal/peminjaman';</script>";
    } else {
        echo "<script>alert('Maaf, Buku gagal di kembalikan!'); window.location.href = 'http://localhost/ukkfinal/peminjaman';</script>";
    }
}
public function detailbuku($id)
  {
    $this->view('peminjaman/buku', [
      'buku'    => $this->model('Buku')->getById($id),
      'ulasan'  => $this->model('UlasanBuku')->getByBookID($id)
    ]);
  }

  public function ulasanbuku($id)
  {
    $data = $this->model('Buku')->getById($id);
    $this->view('peminjaman/ulasan', $data);
  }
  public function ulasanstore()
  {
      if ($this->model('Ulasanbuku')->create([
        'UserID'      => $_POST['UserID'],
        'BukuID'      => $_POST['BukuID'],
        'Ulasan'      => $_POST['Ulasan'],
        'Rating'      => $_POST['Rating'],
      ]) > 0) {
        echo "<script>alert('Selamat, Ulasan Berhasil di Tambahkan'); window.location.href = 'http://localhost/ukkfinal/peminjaman/".$_POST['BukuID']."/detailbuku';</script>";
      } else {
        echo "<script>alert('Maaf, Ulasan gagal di Tambahkan'); window.location.href = 'http://localhost/ukkfinal/peminjaman/".$_POST['BukuID']."/detailbuku';</script>";
      }
  }

}
