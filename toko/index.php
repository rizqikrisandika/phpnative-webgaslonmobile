<?php

//menambahkan session
session_start();

$t = @$_GET['t'];
$ft = "toko/$t.php";

if(file_exists($ft)){
	include("$ft");
}else{
	include("toko/home.php");
}
