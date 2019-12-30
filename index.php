<?php

//menambahkan session
session_start();

$p = @$_GET['p'];
$fl = "user/$p.php";

if(file_exists($fl)){
	include("$fl");
}else{
	include("user/home.php");
}
