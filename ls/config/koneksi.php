<?php

session_start();

$koneksi = mysqli_connect("localhost","root","","db_gaslon");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>