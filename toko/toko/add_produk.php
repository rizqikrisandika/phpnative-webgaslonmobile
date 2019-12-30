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
                        $db = mysqli_query($koneksi,"SELECT * FROM toko where email='".$_SESSION['username']."'");
							$data = mysqli_fetch_assoc($db);

					?>
	
	<div class="main-div" align="center">

		<div style="margin-top:120px;">
        <form action="index.php?t=add_produk_proses" method="post" enctype="multipart/form-data">
			<input name="gambar" value="" type="file" class="validate">

			<input name="id"  value="<?php echo $data['id_toko']; ?>" type="hidden" class="validate">
			<input name="nama" placeholder="Nama" value="" type="text" class="validate">
			<input name="harga" placeholder="Harga" type="number" class="validate">
			<input name="stok"   placeholder="Stok" type="number" class="validate">
			<button>Save</button>
		</form>
        </div>

	</div>


	<script src="assets/js/db.js"></script>
	<script src="assets/js/ui.js"></script>
</body>

</html>