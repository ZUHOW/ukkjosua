<?php 
class UserController extends Controller
{
  public function __construct()
  {
    /**
      * Batasi hak akses hanya untuk Administrator
      * Selain Administrator akan langsung diarahkan kembali ke halaman home
    */
    if ($_SESSION['role'] !== 'Administrator') {
      redirectTo('error', 'Mohon maaf, Anda tidak berhak mengakses halaman ini', '/');
    }
  }
  public function index()
  {
    $data = $this->model('User')->getAll();
    $this->view('user/home', $data);
  }

  public function create()
  {
    $this->view('user/create');
  }

  public function store()
  {
    if ($_POST['Password'] !== $_POST['Konfirmasi_Password']) {
      echo "<script>alert('Maaf, Konfirmasi password tidak cocok'); window.location.href = 'http://localhost/ukkfinal/user/create';</script>";
    } else {
      if ($this->model('User')->create([
        'Username'      => $_POST['Username'],
        'Email'         => $_POST['Email'],
        'NamaLengkap'   => $_POST['NamaLengkap'],
        'Alamat'        => $_POST['Alamat'],
        'Password'      => password_hash($_POST['Password'], PASSWORD_DEFAULT),
        'Role'          => 2
      ]) > 0) {
        echo "<script>alert('Selamat Data user berhasil di tambah'); window.location.href = 'http://localhost/ukkfinal/user';</script>";
      } else {
        echo "<script>alert('Maaf Username/Email Sudah terdaftar'); window.location.href = 'http://localhost/ukkfinal/user';</script>";
      }
    }
  }

  public function edit($id)
  {
    $data = $this->model('User')->getById($id);
    $this->view('user/edit', $data);
  }

  public function update($id)
{
    if ($this->model('User')->update($id) > 0) {
        echo "<script>alert('Selamat, Data Petugas berhasil di edit!'); window.location.href = 'http://localhost/ukkfinal/user';</script>";
    } else {
        echo "<script>alert('Tidak ada perubahan data!'); window.location.href = 'http://localhost/ukkfinal/user';</script>";
    }
}


  public function delete($id)
	{
		if ($this->model('User')->delete($id) > 0) {
      echo "<script>alert('Data User berhasil di hapus'); window.location.href = 'http://localhost/ukkfinal/user';</script>";

		}
	}
}