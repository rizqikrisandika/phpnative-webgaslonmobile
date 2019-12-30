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
            <span><a href="index.php?p=history&id=<?php $_GET['id'] ?>"><img style="height:15px" src="assets/img/icon/back.png"
                        alt="recipe thumb"></a></span>
            <span align="center">History</span>
        </div>
    </nav>
    <?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
							$data = mysqli_fetch_assoc($db);
					?>

    <div class="parent-pwafire">
        <div class="row">

            <table class="centered" style="border: none">


                
                    <?php $totalbelanja = 0;
                    $mulai = 0;
                    $no =$mulai+1;?>
                    <?php $db = mysqli_query($koneksi,"SELECT * FROM pembelian join toko on pembelian.id_toko=toko.id_toko WHERE id_pelanggan = '$data[id_pelanggan]'") ;
                        $cart = mysqli_fetch_assoc($db);
                    ?>
                    <thead>
                        <tr class="text-center">
                            <th>Product</th>
                            <th>Photo</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subs</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                            $db = mysqli_query($koneksi,"SELECT * FROM pembelian_produk  WHERE id_pembelian='$_GET[id]'");                                               
                            while ($nota = mysqli_fetch_array($db)) { ?>
                        <tr>
                            <td><?php echo $nota['nama_produk']; ?></td>
                            <td><img src="toko/assets/img/produk/<?php echo $nota['foto_produk'];?>" width="60"></td>
                            <td>RP. <?php echo number_format($nota['harga_produk']);?></td>
                            <td><?php echo $nota['jumlah']; ?></td>
                            <td>
                                Rp. <?php echo number_format($nota['harga_produk']*$nota['jumlah']) ;?>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
                <tr>
                        <th class="text center-align" colspan="4">Total</th>
                        <th>Rp. <?php echo number_format($cart['total_pembelian']);?></th>
                    </tr>

            </table>

        </div>

    </div>


    <script src="assets/js/db.js"></script>
    <script src="assets/js/ui.js"></script>
</body>

</html>