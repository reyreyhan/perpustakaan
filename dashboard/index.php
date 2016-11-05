<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	
	<?php
	include "go.php";
	include "ngitung.php";
	?>
	
	<body>

		<!-- Banner -->
			<section id="banner">
				<h2><strong>Selamat Datang</strong> Menu Ini Adalah Menu Dashboard Admin</h2>
			</section>

		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>Dashboard Informasi Perpustakaan</h2>
					</header>
                                        
					<div class="features">
                                         
						<div class="feature">
						<a href ="pengunjung.php" style = "text-decoration:none">
							<i class="fa fa-pencil"></i>
							<h3>Pengunjung</h3>
							<p>Lihat Pengunjung Perpustakaan Ini</p>
						</a>
						</div>
						
						<div class="feature">
						<a href ="request.php" style = "text-decoration:none">
							<i class="fa fa-users"></i>
							<h3>User</h3>
							<p>Lihat Request User</p>
						</a>
						</div>
						
						<div class="feature">
						<a href ="#" style = "text-decoration:none">
							<i class="fa fa-book"></i>
							<p>Banyak Buku di Perpustakaan Ini</p>
							<h3><?php echo $tdbuk['wkwk']; ?> Buku</h3>
							<p></p>
						</a>
						</div>
						
						<div class="feature">
						<a href =# style = "text-decoration:none">
							<i class="fa fa-pencil"></i>
							<p>Banyak Pengunjung Hari Ini</p>
							<h3><?php echo $tabsen['absen'] ?> Orang</h3>
						</a>
						</div>
						<div class="feature">
						<a href ="#" style = "text-decoration:none">
							<i class="fa fa-users"></i>	
							<p>Banyak Buku yang Harus di Konfirmasi</p>	
							<h3><?php echo $tkonf['t_konf']; ?> Buku</h3>							
						</a>
						</div>
						<div class="feature">
						<a href ="#" style = "text-decoration:none">
							<i class="fa fa-book"></i>
							<p>Banyak Buku yang Sedang di Pinjam</p>
							<h3><?php 
							$pinjamb = "SELECT COUNT(CODE) AS 'PB' FROM pinjam";
							$viewpinjam  = mysqli_query($login, $pinjamb);
							$tpinjam = mysqli_fetch_array($viewpinjam);
							echo $tpinjam['PB']; 
							?> Buku
							</h3>
						</a>
						</div>
						
						<div class="feature">
						<a href =# style = "text-decoration:none">
							<i class="fa fa-pencil"></i>
							<p>Total Pengunjung Perpustakaan</p>
							<h3><?php echo $tabsen2['t_pengunjung']?> Orang</h3>
						</a>
						</div>
						
						<div class="feature">
						<a href ="request.php" style = "text-decoration:none">
							<i class="fa fa-users"></i>
							<h3>User</h3>
							<p>Lihat Request User</p>
						</a>
						</div>
						
						<div class="feature">
						<a href ="#" style = "text-decoration:none">
							<i class="fa fa-book"></i>
							<p>Banyak Buku yang di Pinjam Hari Ini </p>
							<h3><?php echo $ttrans['tr']; ?> Buku</h3>
						</a>
						</div>
					</div>
				</div>

                                                

			</section>
			
	<!--			<section id="banner">
				<h2><strong>Update Tambahan</strong> Tambahkan Fitur Baru</h2>
				<center><a href="add.php" class="button special">ADD</a></center>
				</section> -->
		<!-- Two -->
		
		<!--	<section id="two" class="wrapper style2 special">
				<div class="inner narrow">
					<header>
						<h2>Kirimkan Kritik dan Saran</h2>
					</header>
					<form class="grid-form" method="post" action="#">
					<form name="" method="POST" action="hore.php">
						<div class="form-control narrow">
							<label for="name">Nama</label>
							<input name="JENENG" id="name" type="text">
						</div>
						<div class="form-control narrow">
							<label for="email">Email</label>
							<input name="IMEL" id="email" type="email">
						</div>
						<div class="form-control">
							<label for="message">Pesan</label>
							<textarea name="PESAN" id="message" rows="4"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Kirim" type="submit"></li>
						</ul>
					</form>
					</form>
				</div>
			</section> -->


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>

</html>