<!DOCTYPE html>
<html>
<head>
	<title>Toko Bangunan Abadi Jaya</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(isset($_POST['hitung'])){
    $cat_a = 75000;
    $cat_b = 125000;
    $cat_c = 250000;

    $hasil_a = $cat_a * $_POST['bil1'];
    $hasil_b = $cat_b * $_POST['bil2'];
    $hasil_c = $cat_c * $_POST['bil3'];
    $hasil = $hasil_a + $hasil_b + $hasil_c;
    $total = $hasil * 10 / 100;
    $bayar = number_format($total,2);
	}
	?>
	<div class="mebel">
		<h2 class="judul">Selamat Datang Di Toko Bangunan Abadi Jaya</h2>
		<a class="brand" href="firdausns44.blogspot.co.id">firdausns44.blogsot.com</a><br>
    <div class="form">
      <h3>Daftar Harga Cat</h3>
      <div class="harga">
        Harga Cat A : Rp. 75,000<br>
        Harga Cat B : Rp. 125,000<br>
        Harga Cat C : Rp. 250,000<br>
      </div>
    </div>
    <div class="form">
      <h3>Pembelian</h3>
      <div class="harga">
        <form method="post" action="index.php">
    			Cat A   :   <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Jumlah Cat"><br>
    			Cat B   :   <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Jumlah Cat"><br>
          Cat C   :   <input type="text" name="bil3" class="bil" autocomplete="off" placeholder="Masukkan Jumlah Cat"><br>
          <h3 class="text">Setiap Pembelian Akan Di Kenakan Pajak PPN 10%</h3>
          <input type="submit" name="hitung" value="Hitung" class="tombol">
    		</form>
      </div>
    </div>
    <div class="form">
      <h3>Pembayaran</h3>
      <div class="harga">
        <?php if(isset($_POST['hitung'])){ ?>
          <input type="text" value="Rp. <?php echo $bayar; ?>" class="bil2">
        <?php }else{ ?>
          <input type="text" value="Rp. 0" class="bil2">
        <?php } ?>
      </div>
    </div>
	</div>
</body>
</html>
