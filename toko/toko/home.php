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

	<?php
	if (isset($_SESSION["email"])) {?>
	<nav class="z-depth-0">
		<div class="nav-wrapper container">
			<span class="right"><a href="index.php">Gaslon Toko</span></a>
			<span class="left grey-text text-darken-1">
				<i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
			</span>
		</div>
	</nav>

	<!-- side nav -->
	<?php
						require "config/koneksi.php";
  							$db1 = mysqli_query($koneksi,"SELECT * FROM toko where email='".$_SESSION['email']."'");
							$data1 = mysqli_fetch_assoc($db1);
					?>
	<ul id="side-menu" class="sidenav side-menu">
		<li><a href="" class="subheader">
				<?php if ($data1["gambar"]!=null) {?>
				<img style="border-radius:50%; width:100px; height:100px"
					src="assets/img/profil/<?php echo $data1['gambar']; ?>" alt="recipe thumb">
				<?php }else{ ?>
				<img style="border-radius:50%; width:100px; height:100px" src="assets/img/icon/shop1.png"
					alt="recipe thumb"> <?php } ?>
				<div style="margin-top:30px;">
					<img style="height: 24px;" src="assets/img/icon/wallet.png" alt="recipe thumb"> RP. 100.000
				</div>
			</a></li>
		<h5 style="margin-left:10px"><a href="index.php?t=profil"> <?php echo $data1['nama'] ?></a></h5>
		<li><a href="index.php?t=home" class="waves-effect">Home</a></li>
		<li><a href="about.html" class="waves-effect">Settings</a></li>
		<li><a href="contact.html" class="waves-effect">Contacts Us</a></i>
		<li><a href="about.html" class="waves-effect">Help</a></li>
		<li><a href="index.php?t=logout" class="waves-effect">Logout</a></li>
	</ul>
<br><br><br>
	<div class="parent-pwafire">

		<div class="row">
			<div class="center">
				<?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM toko where email='".$_SESSION['email']."'");
							$data = mysqli_fetch_assoc($db);
					?>
				<?php if ($data["gambar"]!=null) {?>
					<a href="index.php?t=profil"><img style="border-radius:50%; width:100px; height:100px"
					src="assets/img/profil/<?php echo $data['gambar']; ?>" alt="recipe thumb"></a>
				<?php }else{ ?>
					<a href="index.php?t=profil"><img style="border-radius:50%; width:100px; height:100px" src="assets/img/icon/shop1.png"
					alt="recipe thumb"> <?php } ?></a>
				<h4 style="text-align: center;"><a href="index.php?t=profil"><?php echo $data['nama'] ?></a></h4>
			</div>




		</div>

	</div>
	</div>
	<br><br>

	<div class="row">
		<div class="parent-pwafire">
			<a href="index.php?t=produk">
				<div class="card-panel recipe white row">
					<img src="assets/img/icon/shop1.png" alt="recipe thumb">
					<div style="margin-left: 30px;" class="recipe-details">
						<div class="recipe-title">Produk</div>

					</div>

				</div>
			</a>
			
		</div>

		<div class="parent-pwafire">
			<a href="index.php?t=pemesanan">
				<div class="card-panel recipe white row">
					<img src="assets/img/icon/shop1.png" alt="recipe thumb">
					<div style="margin-left: 30px;" class="recipe-details">
						<div class="recipe-title">Pemesanan</div>

					</div>

				</div>
			</a>
			
		</div>

		
	</div>
	<?php }else  {?>
	<nav class="z-depth-0">
		<div class="nav-wrapper container">
			<span><a href="index.php"><img style="height:15px" src="assets/img/icon/back.png"
						alt="recipe thumb"></a></span>
			<span align="center">Login</span>
		</div>
	</nav>
	<br><br>
	<div class="main-div" align="center">
		<img style="margin-bottom: 25px;height:140px" src="assets/img/icon/shop1.png" alt="recipe thumb"><br>
		<br><br>
		<form action="index.php?t=login_proses" method="post">
			<input name="email" placeholder="Email" type="email" class="validate">

			<input name="password" placeholder="*****" type="password" class="validate">
			<a href="">
				<p style="margin-left:240px">Lupa Password ?</p>
			</a>
			<button>LOGIN</button>
			<a href="index.php?t=register">
				<h6 align="center">Buka Toko</h6>
			</a>
		</form>
	</div>
	<?php } ?>
	<script src="assets/js/db.js"></script>
	<script src="assets/js/ui.js"></script>
</body>

</html>