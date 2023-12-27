<?php
include 'header.php';
?>
<!-- IMAGE -->
<div class="container-fluid" style="margin: 0;padding: 0;">
	<div class="image" style="margin-top: -21px">
		<img src="image/home/kuekering.jpg" style="width: 100%;  height: 650px;">
	</div>
</div>
<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">
	<h4 class="text-justify" style="font-family: arial; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #ff8d87; border-bottom: 2px solid #ff8d87;">Dream Bakery adalah brand Kue Kering yang terbentuk dari tahun 2023. Tempat produksi dan galeri Dream Bakery berada di Kota Surabaya. Bahan baku dan rasa yang berkualitas menjadi keandalan produk kue kering kami.
		Kami selalu memastikan produk kami selalu fresh dan dibuat setiap hari dengan bahan berkualitas terbaik. Misi Utama kami adalah menyajikan makanan penutup yang lezat dengan kombinasi rasa dan tekstur yang sempurna hanya dalam satu suapan. Kami akan selalu berusaha sebaik mungkin untuk menyesuaikan permintaan Anda.</h4>

	<div class="container-fluid text-center">
		<h2 style=" margin-top: 80px;"><b>Nikmati Produk Unggulan Kami Dream Bakery</b></h2>
		<h4 style="  margin-top: 20px; margin-bottom: 50px;"><b>Temukan Kue Kering Favoritmu!</b></h3>
	</div>
	<div class="row">
		<?php
		$result = mysqli_query($conn, "SELECT * FROM produk WHERE SUBSTRING(kode_produk, 2) REGEXP '^[02468]+$' LIMIT 3");
		while ($row = mysqli_fetch_assoc($result)) {
		?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="image/produk/<?= $row['image']; ?>">
					<div class="caption">
						<h3><?= $row['nama'];  ?></h3>
						<h4>Rp.<?= number_format($row['harga']); ?></h4>
						<div class="row">
							<div class="container-fluid">
								<div class="col-md-12">
									<a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-warning btn-block">Lihat Detail</a>
								</div>
							</div>

							<?php

							?>

						</div>

					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
	<div class="container-fluid text-center">
		<div class="button"><a href="produk.php"><button style="background: #F7E1AE; color: black; margin:40px;">Produk Lainnya</button></a></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-5">
			<br><br><br><br><br>
			<h2 style="text-align: center;"><b>Rayakan Momen Keluarga <br> Bersama Dream Bakery</b></h2><br>
			<h4 style="text-align: center;">Sajian kue pilihan terbaik Dream Bakery <br> Menciptakan momen bersama keluarga semakin hangat</h4>
		</div>
		<div class="col-sm-7"><img src="image/home/conten1.jpg" width="102%" height="420"></div>
	</div>
</div>
<?php
include 'footer.php';
?>