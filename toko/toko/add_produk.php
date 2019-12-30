<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gaslon</title>
	<!-- materialize icons, css & js -->
	<link type="text/css" href="assets/css/materialize.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" href="assets/css/styles.css" rel="stylesheet">
	<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	<link type="text/css" href="assets/css/pwafirecard.css" rel="stylesheet">

</head>

<body class="grey lighten-4">

	<!-- top nav -->
	<nav class="z-depth-0">
		<div class="nav-wrapper container">
			<span><a href="index.php?t=produk"><img style="height:15px" src="assets/img/icon/back.png"
						alt="recipe thumb"></a></span>
			<span align="center">Add Produk</span>
		</div>
	</nav>
	<?php
		require "config/koneksi.php";
	?>
	
	<div class="main-div" align="center">

		<div style="margin-top:120px;">
        <form method="post" enctype="multipart/form-data">
			<input name="gambar" value="" type="file" class="validate">
			<input name="nama" placeholder="Nama" type="text" class="validate">
			<input name="harga" placeholder="Harga" type="number" class="validate">
			<input name="stok"   placeholder="Stok" type="number" class="validate">
			<button name="save">Save</button>
		</form>
        </div>

	</div>


	<script src="assets/js/db.js"></script>
	<script src="assets/js/ui.js"></script>
</body>

</html>

<?php

	$id_toko = $_GET['id'];
      if(isset($_POST['save']))
	  {
		if($_FILES['gambar']['error']==0){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $img = $_FILES['gambar'];
        $new_img = 'img_'.date('YmdHis').'.png';


        if(copy($img['tmp_name'],"assets/img/produk/".$new_img)){
           mysqli_query($koneksi,"INSERT INTO produk(id_toko,nama_produk,harga_produk,foto_produk,stok_produk) 
		   values ('$id_toko','$nama','$harga','$new_img','$stok')");
		   
		   echo "<script>alert('Add Product Succes')</script>";
		   echo "<script>location='index.php?t=produk'</script>";
		   exit();
			}
		}
	  }


              