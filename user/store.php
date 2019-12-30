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
			<span><a href="index.php"><img style="height:15px" src="assets/img/icon/back.png"
						alt="recipe thumb"></a></span>
			<span align="center">Store</span>
		</div>
	</nav>
	<?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
							$data = mysqli_fetch_assoc($db);
					?>

<?php
	$db2 = mysqli_query($koneksi,"SELECT * FROM toko");
?>
			
<?php while($data2 = mysqli_fetch_assoc($db2)){?>
	<div class="recipes container grey-text text-darken-1">
		<a href="index.php?p=detailtoko&id=<?php echo $data2['id_toko'] ?>">
		<div class="card-panel recipe white row">
		<?php if ($data2["gambar"]!=null) {?>
			<img src="toko/assets/img/profil/<?php echo $data2['gambar'] ?>" alt="recipe thumb">
				<?php }else{ ?>
				<img  src="toko/assets/img/icon/shop1.png"
					alt="recipe thumb"> <?php } ?>
			<div class="recipe-details">
				<div class="recipe-title"><?php echo $data2['nama'] ?></div>
				<div class="recipe-title"><?php echo $data2['alamat'] ?></div>
			</div>
		</div>
		</a>
		

	</div>
	<?php } ?>


	<script src="assets/js/db.js"></script>
	<script src="assets/js/ui.js"></script>
</body>

</html>