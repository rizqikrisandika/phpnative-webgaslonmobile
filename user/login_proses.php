<?php 
 
// menghubungkan dengan koneksi
include 'config/koneksi.php';
 

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan email dan password yang sesuai
$db = mysqli_query($koneksi,"select * from pelanggan where email='$email' and password='$password'");
$data = mysqli_fetch_array($db);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($db);
 
if($cek != FALSE){
	$_SESSION['user_name'] = $data['email'];
	
	header("location:index.php");
}else{
	header("location:index.php?pesan=gagal");
}

 ?>