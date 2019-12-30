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


<?php
    if(empty($_SESSION['cart']) OR !isset($_SESSION['cart']))
    {
       echo "<script>alert('Order Empty');</script>";
       echo "<script>location='index.php?p=home';</script>";
    }
?>

<body class="grey lighten-4">

    <!-- top nav -->
    <nav class="z-depth-0">
        <div class="nav-wrapper container">
            <span><a href="index.php?p=store"><img style="height:15px" src="assets/img/icon/back.png"
                        alt="recipe thumb"></a></span>
            <span align="center">Order</span>
        </div>
    </nav>
    <?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
							$data = mysqli_fetch_assoc($db);
					?>
    <div class="parent-pwafire">


        <div class="row">
            <br>
            <div class="center">
                <?php
                require "config/koneksi.php";
                     
            ?>

            </div>




        </div>

    </div>

    <div class="parent-pwafire">
        <div class="row">

            <table class="centered" style="border: none">


                <tbody>
                    <?php $totalbelanja = 0;
                    $mulai = 0;
                    $no =$mulai+1;?>
                    <?php foreach ($_SESSION['cart'] as $id_produk => $jumlah): ?>
                    <?php $db = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk = '$id_produk'") ;
                        $cart = mysqli_fetch_assoc($db);
                        $subsharga = $cart["harga_produk"]*$jumlah;
                    ?>
                    <tr>
                        <td><img width="50" style="border-radius:50%; " class="img"
                                src="toko/assets/img/produk/<?php echo $cart['foto_produk'];?>">
                        </td>
                        <td><?php echo $cart['nama_produk'];?></td>
                        <td><?php echo $jumlah ?></td>
                        <td>Rp. <?php echo number_format($subsharga);?></td>
                        <td><a href="index.php?p=deletecart&id=<?php echo $id_produk ?>"><i class="material-icons">cancel</i></a></td>
                    </tr>
                    <?php 
                                $totalbelanja+=$subsharga; ?>
                    <?php endforeach ?>
                </tbody>
                <tfoot>

                    <tr>
                        <th class="text center-align" colspan="3">Total</th>
                        <th>Rp. <?php echo number_format($totalbelanja);?></th>
                    </tr>
                </tfoot>

            </table>
            <br>
            <div class="main-div">
                <a href="index.php?p=orderlokasi" class="btn-flat"><button>Order</button></a>


            </div>
        </div>

    </div>


    <script src="assets/js/db.js"></script>
    <script src="assets/js/ui.js"></script>
</body>

</html>