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
            <span><a href="index.php"><img style="height:15px" src="assets/img/icon/back.png"
                        alt="recipe thumb"></a></span>
            <span align="center">Lokasi Order</span>
        </div>
    </nav>
    <?php
						require "config/koneksi.php";
  							$db = mysqli_query($koneksi,"SELECT * FROM pelanggan where email='".$_SESSION['user_name']."'");
							$data = mysqli_fetch_assoc($db);
					?>

    <div class="main-div" align="center">
        <?php $totalbelanja = 0;?>
        <?php foreach ($_SESSION['cart'] as $id_produk => $jumlah): ?>
        <?php $db2 = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk = '$id_produk'") ;
                        $cart = mysqli_fetch_assoc($db2);
                        $subsharga = $cart["harga_produk"]*$jumlah;
                    ?>
        
        
            <input name="foto" value="<?php echo $cart['foto_produk'];?>" type="hidden" class="validate">
            <input name="nama" value="<?php echo $cart['nama_produk']?>" type="hidden" class="validate">
            <input name="jumlah" value="<?php echo $jumlah?>" type="hidden" class="validate">
            <input name="harga" value="<?php echo $cart['harga_produk']?>" type="hidden" class="validate">
            <input name="total" value="<?php echo $subsharga?>" type="hidden" class="validate">
           
            <?php 
                $totalbelanja+=$subsharga; ?>
                 <?php endforeach ?>
            <input name="total" value="<?php echo $totalbelanja?>" type="hidden" class="validate">
        <form action="" method="post">    
            <br>
            <?php if($data['alamat']==NULL): ?>
            <input name="alamat2" placeholder="Address" type="text" class="validate">
            <?php else:?>
            <input name="alamat" placeholder="Address" value="<?php  echo $data['alamat']?>" type="text" class="validate">
            <?php endif ?>
            <button name="order">Order Sekarang</button>
        </form>
        
       

    </div>


    <script src="assets/js/db.js"></script>
    <script src="assets/js/ui.js"></script>
</body>

</html>

<?php 
	if(isset($_POST["order"])){
	$id_pelanggan = $data['id_pelanggan'];
    $total_pembelian = $totalbelanja;
    $alamat = $_POST['alamat'];
    $alamat2 = $_POST['alamat2'];
    $id_toko = $cart['id_toko'];

    if($data['alamat']==NULL){
        mysqli_query($koneksi,"INSERT INTO pembelian(id_pelanggan,id_toko,total_pembelian,alamat_pembelian)
	    VALUES ('$id_pelanggan',$id_toko,'$total_pembelian','$alamat2')");
    }else{
        mysqli_query($koneksi,"INSERT INTO pembelian(id_pelanggan,id_toko,total_pembelian,alamat_pembelian)
        VALUES ('$id_pelanggan',$id_toko,'$total_pembelian','$alamat')");
    }
	

	$id_pembelian_barusan = $koneksi->insert_id;

	foreach($_SESSION["cart"] as $id_produk => $jumlah){

        $db1 = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk = '$id_produk'") ;
        $cart1 = mysqli_fetch_assoc($db1);

		$nama_produk = $cart1['nama_produk'];
		$harga_produk = $cart1['harga_produk'];
        $foto_produk = $cart1['foto_produk'];
		mysqli_query($koneksi,"INSERT INTO pembelian_produk (id_pembelian,id_produk,jumlah,nama_produk,foto_produk,harga_produk)
		VALUES ('$id_pembelian_barusan','$id_produk','$jumlah','$nama_produk','$foto_produk','$harga_produk')");

		mysqli_query($koneksi,"UPDATE produk SET stok_produk=stok_produk-$jumlah WHERE id_produk='$id_produk'");
	}

	unset($_SESSION["cart"]);

    echo "<script>alert('Succes')</script>";
    echo "<script>location='index.php?p=home</script>";
    header("location:index.php?p=history");

	}
 ?>