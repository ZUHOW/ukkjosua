<?php 
class KategoribukuController extends Controller
{
  public function __construct()
  {
    /**
      * Batasi hak akses hanya untuk Administrator dan Petugas
      * Selain Administrator dan Petugas akan langsung diarahkan kembali ke halaman home
    **/
    if ($_SESSION['role'] !== 'Administrator' && $_SESSION['role'] !== 'Petugas') {
      echo "<script>alert('Maaf, Anda tidak boleh mengakses halaman ini '); window.location.href = 'http://localhost/ukkfinal/';</script>";
    }
  }
  
  public function index()
  {
    $data = $this->model('Kategoribuku')->getAll();
    $this->view('kategoribuku/home', $data);
  }

  public function create()
  {
    $this->view('kategoribuku/create');
  }

  public function store()
  {
    if ($this->model('Kategoribuku')->create([
      'NamaKategori'  => $_POST['NamaKategori']
    ]) > 0) {
      echo "<script>alert('Kategori Berhasil di Tambahkan'); window.location.href = 'http://localhost/ukkfinal/kategoribuku';</script>";
    } else {
      echo "<script>alert('Kategori gagal di Tambahkan'); window.location.href = 'http://localhost/ukkfinal/kategoribuku';</script>";

    }
  }

  public function edit($id)
  {
    $data = $this->model('KategoriBuku')->getById($id);
    $this->view('kategoribuku/edit', $data);
  }

  public function update($id)
  {
    if ($this->model('Kategoribuku')->update($id) > 0) {   
      echo "<script>alert('Kategori Berhasil di Update'); window.location.href = 'http://localhost/ukkfinal/kategoribuku';</script>";
   
    } else {
      echo "<script>alert('Kategori gagal di Update'); window.location.href = 'http://localhost/ukkfinal/kategoribuku';</script>";

    }
  }

  public function delete($id)
	{
		if ($this->model('Kategoribuku')->delete($id) > 0) {
      echo "<script>alert('Kategori berhasil di hapus'); window.location.href = 'http://localhost/ukkfinal/kategoribuku';</script>";

		}
	}
}
