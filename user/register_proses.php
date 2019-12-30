<?php
include 'config/koneksi.php';
$name = $_POST['nama'];
$email =$_POST['email'];
$password =md5($_POST['password']);
$telp =$_POST['nohp'];


$sql=mysqli_query($koneksi,"insert into pelanggan(nama,email,password,nohp) values ('$name','$email','$password','$telp')");
if($sql) {
	header("location:index.php");
}
?> 