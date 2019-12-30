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
      <span align="center">Register</span>
		</div>
    </nav>
    <br><br>
		<div class="main-div" align="center" >
      
		<img style="margin-bottom: 25px;height:140px" src="assets/img/profil/login.png" alt="recipe thumb"><br>
    <br><br>
    <form action="index.php?p=register_proses" method="post">
				<input name="nama" placeholder="Gaslon Id"  type="text" class="validate">
				<input name="email" placeholder="gaslon@gmail.com"  type="email" class="validate">
				<input name="password" placeholder="*****" type="password" class="validate">
				<input name="nohp" placeholder="08123456789" type="text" class="validate">
				<br><br>
				<button>Buat Akun</button>
			</form>
			
			
		</div>
  
  
  <script src="assets/js/db.js"></script>
  <script src="assets/js/ui.js"></script>
</body>
</html>