<?php
use Dompdf\Dompdf;

class BukuController extends Controller
{
    public function __construct()
    {
        /**
         * Batasi hak akses hanya untuk Administrator dan Petugas
         * Selain Administrator dan Petugas akan langsung diarahkan kembali ke halaman home
         **/
        if ($_SESSION['role'] !== 'Administrator' && $_SESSION['role'] !== 'Petugas') {
            echo "<script>alert('Maaf, Anda tidak boleh mengakses halaman ini '); window.location.href = 'http://localhost/ukkfinal/';</script>";
            exit();
        }
    }
    public function index()
    {
        $data = $this->model('KBRelasi')->get();
        $this->view('buku/home', $data);
    }
    public function create()
    {
      $data = $this->model('KategoriBuku')->getAll();
      $this->view('buku/create', $data);
    }
  
    public function store()
    {      
    // Simpan data buku ke database
    $BukuID = $this->model('Buku')->create([
        'Judul'       => $_POST['Judul'],
        'Penulis'     => $_POST['Penulis'],
        'Penerbit'    => $_POST['Penerbit'],
        'TahunTerbit' => $_POST['TahunTerbit'],
        'Deskripsi'   => $_POST['Deskripsi'],
    ]);
  
      $KategoriID = $_POST['KategoriID'];
  
      if ($this->model('KBRelasi')->create([
        'BukuID'      => $BukuID,
        'KategoriID'  => $KategoriID
      ]) > 0) {
        echo "<script>alert('Buku berhasil di tambahkan'); window.location.href = 'http://localhost/ukkfinal/buku';</script>";

      } else {
        echo "<script>alert('Buku gagal di tambahkan'); window.location.href = 'http://localhost/ukkfinal/buku/create';</script>";

      }
    }
    public function edit($id)
    {
      $data = $this->model('Buku')->getById($id);
      $this->view('buku/edit', $data);
    }
  
    public function update($id)
    {
      if ($this->model('Buku')->update($id) > 0) {
        echo "<script>alert('Buku berhasil di edit'); window.location.href = 'http://localhost/ukkfinal/buku';</script>";
      } else {
        echo "<script>alert('Buku gagal di edit'); window.location.href = 'http://localhost/ukkfinal/buku';</script>";
      }
    }
  
    public function delete($id)
    {
      if ($this->model('Buku')->delete($id) > 0) {
        echo "<script>alert('Buku berhasil di hapus'); window.location.href = 'http://localhost/ukkfinal/buku';</script>";
      }
    }
  
    public function ulasan($id)
    {
      $this->view('buku/ulasan', [
        'buku'    => $this->model('Buku')->getById($id),
        'ulasan'  => $this->model('Ulasanbuku')->getByBookId($id)
      ]);
    }
    public function cetakbuku()
    {
        $data = $this->model('KBRelasi')->get();
        $html  = "<center>";
        $html  .= "<h1>SMK Telkom 1 Medan</h1>";
        $html  .= "<h2>PERPUSTAKAAN DIGITAL</h2>";
        $html  .= "<h3>DAFTAR BUKU</h3>";
        $html  .= "<hr>";
        $html   .= "<table align='center' border='1' cellpadding='10' cellspacing='0'>";
        $html   .= "<tr><th>No</th><th>Kategori</th><th>Judul Buku</th><th>Penulis</th><th>Penerbit</th><th>Tahun Terbit</th></tr>";
        $no = 1;
        foreach ($data as $buku) {
            $html .= "<tr>";
            $html .= "<td>".$no."</td>";
            $html .= "<td>".$buku['NamaKategori']."</td>";
            $html .= "<td>".$buku['Judul']."</td>";
            $html .= "<td>".$buku['Penulis']."</td>";
            $html .= "<td>".$buku['Penerbit']."</td>";
            $html .= "<td>".$buku['TahunTerbit']."</td>";
            $html .= "</tr>";
            $no++;
        }
        $html   .= "</table>";
        $html  .= "</center>";
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('4A', 'potrait');
        $dompdf->render();
        $dompdf->stream('Data Buku', ['Attachment' => 0]);
    }
}
?>
