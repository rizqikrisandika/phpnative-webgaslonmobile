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
		<span><a href="index.php"><img style="height:15px" src="assets/img/icon/back.png" alt="recipe thumb"></a></span>
		<span align="center">Order</span>
		</div>
	  </nav>
	   <?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
							$data = mysqli_fetch_assoc($db);
					?>
	    <div class="row">
			<div class="column">
				<div class="cardorder">
					<img src="assets/img/store/shop.png" alt="recipe thumb"> &nbsp; Toko Maju mundur
				</div>
			</div>
			<div class="column">
				<div class="cardorder">
				<img src="assets/img/store/gas.png" alt="recipe thumb">
				</div>
			</div>
			<div class="column">
				<div class="cardorder">
				<img src="assets/img/store/galon.png" alt="recipe thumb"></div>
			</div>
			<div class="column">
				<div class="cardorder"><img src="assets/img/store/galon.png" alt="recipe thumb"></div>
			</div>
			<div class="column">
				<div class="main-div">
					<button>Order Now</button>
				</div>
			</div>
		</div>

  <script src="assets/js/db.js"></script>
  <script src="assets/js/ui.js"></script>
</body>
</html>