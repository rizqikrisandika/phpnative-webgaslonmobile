<?php 

 
// menghubungkan dengan koneksi
include 'config/koneksi.php';
 

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan email dan password yang sesuai
$db = mysqli_query($koneksi,"select * from toko where email='$email' and password='$password'");
$data = mysqli_fetch_array($db);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($db);
 
if($cek != FALSE){
	$_SESSION['email'] = $data['email'];
	
	echo "<script>alert('Login Succes')</script>";
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
}else{
	header("location:index.php?pesan=gagal");
}

 ?>