<?php 
class LoginController extends Controller
{
  public function index()
  {
    $this->view('login');
  }

  public function login()
	{
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$data 	  = $this->model('User')->getByUsername($Username);

		// periksa ketersediaan username
		if (!empty($data)) {
			// Periksa kecocokan password
			if (password_verify($Password, $data['Password'])) {
				$_SESSION['login']		= true;
				$_SESSION['username']	= $data['Username'];
				$_SESSION['role']		  = $data['Role'];
				$_SESSION['UserID']	  = $data['UserID'];
				redirectTo('success', '', '/');
			} else {
				echo "<script>alert('Maff, Password anda salah'); window.location.href = 'http://localhost/ukkfinal/login';</script>";
			}
		} else {
			echo "<script>alert('Maaf, Username tidak Terdaftar'); window.location.href = 'http://localhost/ukkfinal/login';</script>";
		}
	}

  public function register()
  {
    $this->view('register');
  }

  public function registers()
  {
    if ($_POST['Password'] !== $_POST['PasswordConfirm']) {
      echo "<script>alert('Maaf, Konfirmasi password tidak cocok'); window.location.href = 'http://localhost/ukkfinal/login/register';</script>";
    } else {
      if ($this->model('User')->create([
          'Username'      => $_POST['Username'],
          'Email'         => $_POST['Email'],
          'NamaLengkap'   => $_POST['NamaLengkap'],
          'Alamat'        => $_POST['Alamat'],
          'Password'      => password_hash($_POST['Password'], PASSWORD_DEFAULT),
          'Role'          => 3
      ]) > 0) {
          echo "<script>alert('Selamat, Registrasi berhasil'); window.location.href = 'http://localhost/ukkfinal/login';</script>";
      } else {
          echo "<script>alert('Maaf, Username/Email sudah terdaftar'); window.location.href = 'http://localhost/ukkfinal/login/register';</script>";
      }
    }
  }

  public function logout()
	{
		session_destroy();
		session_unset();
    echo "<script>alert('Selamat, Anda berhasil logout!'); window.location.href = 'http://localhost/ukkfinal/login';</script>";
  }
}
