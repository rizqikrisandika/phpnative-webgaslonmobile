<?php
include 'config/koneksi.php';
$name = $_POST['nama'];
$email =$_POST['email'];
$password =md5($_POST['password']);
$telp =$_POST['nohp'];


$sql=mysqli_query($koneksi,"insert into pelanggan(nama,email,password,nohp) values ('$name','$email','$password','$telp')");
if($sql) {
	echo "<script>alert('Register Succes')</script>";
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
}
?> 