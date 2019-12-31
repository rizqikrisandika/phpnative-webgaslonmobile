<?php


$koneksi = mysqli_connect("localhost","id12086773_gaslon","gaslonid","id12086773_gaslon");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>