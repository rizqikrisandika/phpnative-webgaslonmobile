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
	if (isset($_SESSION["user_name"])) {?>
		<nav class="z-depth-0">
			<div class="nav-wrapper container">
			  <span class="right"><a href="index.php">Gaslon</span></a>
			  <span class="left grey-text text-darken-1">
				<i class="material-icons sidenav-trigger" data-target="side-menu">menu</i>
			  </span>
			</div>
		</nav>

		  <!-- side nav -->
		  <?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
							$data = mysqli_fetch_assoc($db);
					?>
		  <ul id="side-menu" class="sidenav side-menu">
			<li><a href="" class="subheader" >
			<?php if ($data["gambar"]!=null) {?>
			  <img style="border-radius:50%; width:100px; height:100px" src="assets/img/profil/<?php echo $data['gambar']; ?>" alt="recipe thumb">
			  <?php }else{ ?>
				<img style="border-radius:50%; width:100px; height:100px" src="assets/img/profil/man.png" alt="recipe thumb"> <?php } ?>
				<div style="margin-top:30px;">
					<img style="height: 24px;" src="assets/img/icon/wallet.png" alt="recipe thumb"> RP. 100.000
				</div>
			  </a></li>
			  <h5 style="margin-left:10px"><a href="index.php?p=profil" > <?php echo $data['nama'] ?></a></h5>
			<li><a href="index.php?p=home" class="waves-effect">Home</a></li>
			<li><a href="about.html" class="waves-effect">Settings</a></li>
			<li><a href="contact.html" class="waves-effect">Contacts Us</a></i>
			<li><a href="about.html" class="waves-effect">Help</a></li>
			<li><a href="index.php?p=logout" class="waves-effect">Logout</a></li>
		  </ul>
		  <br><br>
		  <div class="parent-pwafire">
		  
			<div class="row">
			 <div class="profil">
					<?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
							$data = mysqli_fetch_assoc($db);
					?>
			   <?php if ($data["gambar"]!=null) {?>
			  <img style="border-radius:50%; width:100px; height:100px" src="assets/img/profil/<?php echo $data['gambar']; ?>" alt="recipe thumb">
			  <?php }else{ ?>
				<img style="border-radius:50%; width:100px; height:100px" src="assets/img/profil/man.png" alt="recipe thumb"> <?php } ?>
			 <h4 style="text-align: center;"><?php echo $data['nama'] ?></h4>
			 </div>
			 <br><br>
			 <a href="index.php?p=store">
			  <div class="col-lg-4 col-sm-12">
			   <div class="card hovercard">
			   <div class="avatar">
				 <img src="assets/img/icon/shop.svg" alt="recipe thumb"></div>
				 <div class="info">
				 <div class="title">Store</div>
				 </div>
			   </div>
			   </a>
			   <a href="index.php?p=keranjang">
			   <div class="card hovercard">
			   <div class="avatar">
				 <img src="assets/img/icon/cart.svg" alt="recipe thumb">
			   </div>
			   <div class="info">
				 <div class="title">Order List</div>
			   </div>
			   </div>
			  </a>
			   <div class="card hovercard">
				 <div class="avatar">
				   <img src="assets/img/icon/wallet.svg" alt="recipe thumb">
				   </div>
				   <div class="info">
				   <div class="title">GG-Pay</div>
				   </div>
				 </div>
			   </div>
		   
			   <div class="col-lg-4 col-sm-12">
				 <div class="card hovercard">
				 <div class="avatar">
				   <img src="assets/img/icon/chat.svg" alt="recipe thumb"></div>
				   <div class="info">
				   <div class="title">Live Chat</div>
				   </div>
				 </div>
				 <div class="card hovercard">
				 <div class="avatar">
				   <img src="assets/img/icon/star.svg" alt="">
				 </div>
				 <div class="info">
				   <div class="title">Favorite</div>
				 </div>
				 </div>
				 <a href="index.php?p=history">
				 <div class="card hovercard">
				   <div class="avatar">
					 <img src="assets/img/icon/history.svg" alt="recipe thumb">
					 </div>
					 <div class="info">
					 <div class="title">History</div>
					 </div>
				   </div>
				   </a>
				 </div>
			 </div>
		  </div>
	<?php }else  {?>
	  <nav class="z-depth-0">
		<div class="nav-wrapper container">
		<span><a href="index.php"><img style="height:15px" src="assets/img/icon/back.png" alt="recipe thumb"></a></span>
		<span align="center">Login</span>
		</div>
	  </nav>
	  <br><br><br><br>
		<div class="main-div" align="center" >
		<img style="margin-bottom: 25px;height:140px" src="assets/img/profil/login.png" alt="recipe thumb"><br>
		<br><br>
		<form action="index.php?p=login_proses" method="post">
				<input name="email" placeholder="Email"  type="email" class="validate">
				
				<input name="password" placeholder="*****" type="password" class="validate">
				<a href=""><p style="margin-left:240px">Lupa Password ?</p></a>
				<button>LOGIN</button>
				<a href="index.php?p=register"><h6 align="center">Buat Akun</h6></a>
			</form>
		</div>
	<?php } ?>
  <script src="assets/js/db.js"></script>
  <script src="assets/js/ui.js"></script>
</body>
</html>