<?php
include 'config/koneksi.php';
$name = $_POST['nama'];
$email =$_POST['email'];
$password =md5($_POST['password']);
$telp =$_POST['nohp'];


$sql=mysqli_query($koneksi,"insert into toko (nama,email,nohp,password) values ('$name','$email','$telp','$password')");
if($sql) {
	header("location:index.php");
}
?> 