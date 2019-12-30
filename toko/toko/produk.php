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
  							$db = mysqli_query($koneksi,"SELECT * FROM toko where email='".$_SESSION['email']."'");
							$data = mysqli_fetch_assoc($db);
					?>

    <?php
	if (isset($_SESSION["email"])) {?>
    <nav class="z-depth-0">
        <div class="nav-wrapper container">
            <span><a href="index.php"><img style="height:15px" src="assets/img/icon/back.png"
                        alt="recipe thumb"></a></span>
            <span align="center">Produk</span>
        </div>
    </nav>
    <br>

    <div class="parent-pwafire">
        <div class="row">
        <a href="index.php?t=add_produk&id=<?php echo $data['id_toko']; ?>" class="btn-flat"
                    style="background: #98b0ff;color:white">Add Produk</a>

                <br>




        </div>

    </div>





    <div class="recipes container grey-text text-darken-1">
            <?php
				$db2 = mysqli_query($koneksi,"SELECT * FROM produk where id_toko = $data[id_toko]");
            ?>


            <?php while($data2 = mysqli_fetch_assoc($db2)){?>
            <div class="card-panel recipe white row">
                <img src="assets/img/produk/<?php echo $data2['foto_produk'] ?>" alt="recipe thumb">
                <div style="margin-left: 30px;" class="recipe-details">
                    <div class="recipe-title"><?php echo $data2['nama_produk'] ?></div>
                    <div class="recipe-title">Stok: <?php echo $data2['stok_produk'] ?></div>

                </div>
                <div  class="right">
                    <a href="index.php?t=delete&id=<?php echo $data2['id_produk'] ?>"
                                                onclick="javascript: return confirm('Anda yakin hapus produk <?php echo $data2['nama_produk'] ?>?')"><i class="material-icons">cancel</i></a>
                    <a href="index.php?t=edit&id=<?php echo $data2['id_produk'] ?>"><i class="material-icons">edit</i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    <?php }?>
    <script src="assets/js/db.js"></script>
    <script src="assets/js/ui.js"></script>
</body>

</html>