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

    <?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
                            $data = mysqli_fetch_assoc($db);
                            $id = $_GET['id'];
                            $db3 = mysqli_query($koneksi,"SELECT * FROM toko where id_toko=$id");
                
                $data3 = mysqli_fetch_assoc($db3);
					?>

    <?php
	if (isset($_SESSION["user_name"])) {?>
    <nav class="z-depth-0">
        <div class="nav-wrapper container">
            <span><a href="index.php?p=store"><img style="height:15px" src="assets/img/icon/back.png"
                        alt="recipe thumb"></a></span>
            <span align="center"><?php echo $data3['nama'] ?></span>
        </div>
    </nav>
    <br>



    
    <div class="recipes container grey-text text-darken-1">
            <?php
				$db2 = mysqli_query($koneksi,"SELECT * FROM produk where id_toko=$id");
            ?>


            <?php while($data2 = mysqli_fetch_assoc($db2)){?>
            <div class="card-panel recipe white row">
                <img src="toko/assets/img/produk/<?php echo $data2['foto_produk'] ?>" alt="recipe thumb">
                <div style="margin-left: 30px;" class="recipe-details">
                    <div class="recipe-title"><?php echo $data2['nama_produk'] ?></div>
                    <div class="recipe-title">Stok: <?php echo $data2['stok_produk'] ?></div>
                    <div class="recipe-title">Rp. <?php echo $data2['harga_produk'] ?></div>
                </div>
                
                <div class="right">
                    <a href="index.php?p=addcart&id=<?php echo $data2['id_produk'] ?>"><i class="material-icons">add_shopping_cart</i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    <?php }?>
    <script src="assets/js/db.js"></script>
    <script src="assets/js/ui.js"></script>
</body>

</html>