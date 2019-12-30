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
			<span align="center">Profil</span>
		</div>
	</nav>
	<?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
							$data = mysqli_fetch_assoc($db);
					?>
	<div class="parent-pwafire">
		<div class="profil">
			<?php if ($data["gambar"]!=null) {?>
			<img style="border-radius:50%; width:100px; height:100px;margin: 30px 0px 0px 0px;"
				src="assets/img/profil/<?php echo $data['gambar']; ?>" alt="recipe thumb">
			<?php }else{ ?>
			<img style="border-radius:50%; width:100px; height:100px;margin: 30px 0px 0px 0px;" src="assets/img/profil/man.png"
				alt="recipe thumb"> <?php } ?>
		</div>
	</div>
	<div class="main-div" align="center">

		<form action="index.php?p=profil_update" method="post" enctype="multipart/form-data">
			<input name="gambar" value="<?php echo $data['gambar']?>" type="file" class="validate">

			<input name="id" value="<?php echo $data['id_pelanggan']?>" type="hidden" class="validate">
			<input name="nama" value="<?php echo $data['nama']?>" type="text" class="validate" disabled>
			<input name="email" value="<?php echo $data['email']?>" type="email" class="validate" disabled>
			<input name="nohp" value="<?php echo $data['nohp']?>" type="text" class="validate">
			<input name="alamat" value="<?php echo $data['alamat']?>" type="text" class="validate">
			<button>Save</button>
		</form>

	</div>


	<script src="assets/js/db.js"></script>
	<script src="assets/js/ui.js"></script>
</body>

</html>