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
            <span><a href="index.php?t=pemesanan&id=<?php $_GET['id'] ?>"><img style="height:15px" src="assets/img/icon/back.png"
                        alt="recipe thumb"></a></span>
            <span align="center">Detail</span>
        </div>
    </nav>
    <?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM toko where email='".$_SESSION['username']."'");
							$data = mysqli_fetch_assoc($db);
                    ?>
                    
                    <?php
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.
id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'"); 
$detail = $ambil->fetch_assoc();
?>

    <div class="parent-pwafire">
        
        <div class="row">

        <div>
        <h5>Pemesan: <?php echo $detail['nama'] ?></h5>
        <h5>Alamat: <?php echo $detail['alamat'] ?></h5>
        </div>
        <br>

            <table class="centered" style="border: none">


                
                    <?php $totalbelanja = 0;
                    $mulai = 0;
                    $no =$mulai+1;?>
                    <?php $db = mysqli_query($koneksi,"SELECT * FROM pembelian join toko on pembelian.id_toko=toko.id_toko") ;
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
                            <td><img src="assets/img/produk/<?php echo $nota['foto_produk'];?>" width="100"></td>
                            <td>RP. <?php echo number_format($nota['harga_produk']);?></td>
                            <td><?php echo $nota['jumlah']; ?></td>
                            <td>
                                Rp. <?php echo number_format($nota['harga_produk']*$nota['jumlah']) ;?>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>

            </table>

        </div>

    </div>


    <script src="assets/js/db.js"></script>
    <script src="assets/js/ui.js"></script>
</body>

</html>