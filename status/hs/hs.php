<html>
<?php
include "go.php";
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
</head>


<body>

<div class="container">

<div class="page-header">
    <h1>Konfirmasi! <small></small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form"  name="MF" method="POST" action="hore.php">
		
            <div class="col-lg-6">
			
	<?php
	

		//no judul kategori code nis tgl
		$F = $_GET['CODE'];
		$ndelok = "
		SELECT pinjam.JUDUL, pinjam.KATEGORI, pinjam.TGL, pinjam.CODE, pinjam.NIS, anggota.NIS, anggota.NAMA
		FROM pinjam
		INNER JOIN anggota
		ON pinjam.NIS=anggota.NIS
		WHERE `pinjam` . `CODE` = '$F'";
		$ndelok2 = "

		";
		
		$queryndelok = mysql_query($ndelok);
								
			
		while($dadi = mysql_fetch_array($queryndelok))
		{
			$A = $dadi['TGL'];
			$B = date('Y-m-d');
	
			//mbayare
			$TGLP = date_create("$A");
			$TGLB = date_create("$B");
			$C = date_diff($TGLP,$TGLB);
			$jarak = $C->format("%a");
			
			echo "" . $dadi['NAMA'] . "<br>";

			
			if ($jarak > 7) {
				echo "Pinjam Buku Pada  " . $A . "<br>";
				echo "Mengembalikan Buku Pada " . $B . "<br>";
				$telat = $jarak - 7;
				$bayar = $telat * 500;
				echo "Batas Peminjaman Adalah 7 Hari <br>";
				echo "Anda Telat " . $telat . " Hari <br>";
				echo "Jadi Anda Harus Bayar Rp. " . $bayar;
			} else { 
				echo "Terimakasih Telah Mengembalikan Buku Tepat Waktu";
			}
			
			//echo "Telat " . $jarak;
			//echo "Anda Didenda : " ;
	?>

		
			    <div class="form-group" hidden>
                    <label for="InputName">Judul</label>
                    <input value="<?php echo $dadi['JUDUL']; ?>" type="text" class="form-control" name="JUDUL" id="InputName" placeholder="Masukkan Judul" required>
                </div>
				
                <div class="form-group" hidden>
                    <label for="InputName">Kategori</label>
					<input value="<?php echo $dadi['KATEGORI']; ?>" type="text" class="form-control" name="KATEGORI" id="InputName" placeholder="Masukkan Kategori" required>
                </div>
				
				<div class="form-group" hidden>
                    <label for="InputName">NIS</label>
                    <input value="<?php echo $dadi['NIS']; ?>" type="text" class="form-control" name="NIS" id="InputName" placeholder="Masukkan NIS" required>
                </div>
				
                <div class="form-group" hidden>
                    <label for="InputName">Kode Buku</label>
                    <input value="<?php echo $dadi['CODE']; ?>" type="text" class="form-control" name="CODE" id="InputName" placeholder="Masukkan Kode Buku" required>
                </div>
				
				<div class="form-group" hidden>
                    <label for="InputName">Tanggal</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="TGL" id="InputName" value="<?php echo $dadi['TGL']; ?>">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				
				<div class="form-group" hidden>
                    <label for="InputName">Tanggal Balik</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="TGLB" id="InputName" value="<?php $tgl=date('Y-m-d'); echo $tgl; ?>">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				
				
		 <input type="submit" name="submit" id="submit" value="CONFIRM" class="btn btn-info pull-right">
	<?php
		}
	?>
            </div>
        </form>
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>