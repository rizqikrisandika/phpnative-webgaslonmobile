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
            <span><a href="index.php?p=home"><img style="height:15px" src="assets/img/icon/back.png"
                        alt="recipe thumb"></a></span>
            <span align="center">Pemesanan</span>
        </div>
    </nav>
    <?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM toko where email='".$_SESSION['email']."'");
							$data = mysqli_fetch_assoc($db);
					?>

    <div class="parent-pwafire">
        <div class="row">

            <table class="centered" style="border: none">


                
                    <thead>
                        <tr class="text-center">
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Address</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php $totalbelanja = 0;
                    $mulai = 0;
                    $no =$mulai+1;?>
                    <?php $db1 = mysqli_query($koneksi,"SELECT * FROM pembelian join pelanggan on pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE id_toko = '$data[id_toko]' order by tanggal_pembelian asc") ;
                     $db2 = mysqli_query($koneksi,"SELECT * FROM pembelian join pelanggan on pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE id_toko = '$data[id_toko]' order by tanggal_pembelian asc") ;
                     $cart2 = mysqli_fetch_assoc($db2);
                     $id_pembelian = $cart2['id_pembelian'];
                       while ($cart = mysqli_fetch_assoc($db1)){
                        
                    ?>
                    <tr>
                        <td><?php echo $cart['nama'];?></td>
                        <td><?php echo $cart['tanggal_pembelian'];?></td>
                        <td>Rp.<?php echo number_format( $cart['total_pembelian']);?></td>
                        <td><?php echo $cart['alamat']; ?></td>
                        <td>
                            <?php if($cart['status_pembelian']=="Di kirim"): ?>
                            <a href="index.php?t=detail&id=<?php echo $cart['id_pembelian'] ?>" class="btn-group">Detail</a>
                            <a href="index.php?t=acc_done&id=<?php echo $cart['id_pembelian'] ?>">Done</a>
                            <?php elseif($cart['status_pembelian']=="Selesai"):?>
                            <a href="index.php?t=detail&id=<?php echo $cart['id_pembelian'] ?>" class="btn-group">Detail</a>
                        <?php else:?>
                        <div>
                                <a href="index.php?t=acc_pemesanan&id=<?php echo $cart['id_pembelian'] ?>">Accept</a>
                                </div>
                                <br>
                            <a href="index.php?t=detail&id=<?php echo $cart['id_pembelian'] ?>" class="btn-group">Detail</a>
                            <?php endif?>
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

