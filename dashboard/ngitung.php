 <?php

    include "go.php";
	
    $tgl = date('Y-m-d');

	$absen = "SELECT COUNT(IF(`TGL` LIKE '$tgl', `KELAS`, Null)) AS `absen` FROM absensi";
    $viewabsen = mysqli_query($login, $absen);
    $tabsen = mysqli_fetch_array($viewabsen); // banyak pengunjung hari ini
	//echo "Pengunjung Hari Ini : " . $tabsen['absen']; echo "<br>";
	
	$absen2 = "SELECT COUNT(NO) AS 't_pengunjung' FROM absensi";
	$viewabsen2 = mysqli_query($login, $absen2);
	$tabsen2 = mysqli_fetch_array($viewabsen2);
	//echo "Banyak Pengunjung Perpustakaan Adalah " . $tabsen2['t_pengunjung'];
	
	$konf = "SELECT COUNT(NO) AS 't_konf' FROM konfirmasi";
	$viewkonf = mysqli_query($login, $konf);
	$tkonf = mysqli_fetch_array($viewkonf);
	//echo "Banyak Buku yang Harus di Konfirmasi Adalah " . $tkonf['t_konf'];
	
	$pinjamb = "SELECT COUNT(CODE) AS 'PB' FROM pinjam";
	$viewpinjam  = mysqli_query($login, $pinjamb);
	$tpinjam = mysqli_fetch_array($viewpinjam);
	//echo "Banyak Buku yang Sedang di Pinjam Adalah " . $tpinjam['PB'];
	
	
	$transaksi = "SELECT COUNT(IF(`TGL` LIKE '$tgl', `NIS`, Null)) AS `tr` FROM pinjam";
    $viewtrans = mysqli_query($login, $transaksi);
    $ttrans = mysqli_fetch_array($viewtrans); //digunakan untuk menghitung banyak peminjam pada hari ini
	//echo "Banyak Buku yang di Pinjam Pada Hari Ini Adalah " . $ttrans['tr'];
	
    $dat_buk = "SELECT COUNT(JUDUL) AS `wkwk` FROM data_buku";
    $viewdbuk = mysqli_query($login, $dat_buk);
    $tdbuk = mysqli_fetch_array($viewdbuk);  //iki cek data buku
	//echo "<br>" . "Banyak Buku di Perpustakaan Ini : " . $tdbuk['dat_buk']; //iki cek banyak buku

    $dat_ang = "SELECT COUNT(NIS) AS `dat_ang` FROM anggota";
    $viewdang = mysqli_query($login, $dat_ang);
    $tdang = mysqli_fetch_array($viewdang);
	
	$dat_pinjam = "SELECT COUNT(NIS) AS 'ikisembarangasline' FROM pinjam";
	$viewpinjam = mysqli_query($login, $dat_pinjam);
	$tpinjam = mysqli_fetch_array($viewpinjam);	
	


	
	//echo "Pengunjung Hari Ini : " . $tabsen['absen']; echo "<br>";
	
	////echo "Banyak Peminjam Pada Hari Ini	 : " . $ttrans['tr']; echo "<br>";
	
	//echo "Banyak Anggota Yang Telah Terdaftar di Perpustakaan Ini : " . $tdang['dat_ang
	
	//echo "<br>" . "Banyak Buku yang Sedang di Pinjam : " . $tpinjam['ikisembarangasline'];
	
	//echo "<br>" . "Banyak Buku di Perpustakaan Ini : " . $tdbuk['dat_buk']; //iki cek banyak buku

 ?>