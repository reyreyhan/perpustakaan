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
    <h1>Detail Data! <small></small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form"  name="MF" method="POST" action="listanggota.php">
		
            <div class="col-lg-6">
			
	<?php
		$F = $_GET['NIS'];
		$ndelok = "SELECT * FROM anggota WHERE `anggota` . `NIS` = '$F'";
		$queryndelok = mysql_query($ndelok);
		
		while($dadi = mysql_fetch_array($queryndelok))
		{
	?>
			
			    <div class="form-group">
                    <label for="InputName">NIS</label>
                    <input value="<?php echo $dadi['NIS']; ?>" type="text" class="form-control" name="NIS" id="InputName" placeholder="Masukkan Judul" required  disabled>
                </div>
				
                <div class="form-group" >
                    <label for="InputName">NAMA</label>
					<input value="<?php echo $dadi['NAMA']; ?>" type="text" class="form-control" name="NAMA" id="InputName" placeholder="Masukkan Kategori" required  disabled>
                </div>
				
				<div class="form-group" >
                    <label for="InputName">KELAS</label>
                    <input value="<?php echo $dadi['KELAS']; ?>" type="text" class="form-control" name="KELAS" id="InputName" placeholder="Masukkan NIS" required  disabled>
                </div>
				
                <div class="form-group" >
                    <label for="InputName">JURUSAN</label>
                    <input value="<?php echo $dadi['JURUSAN']; ?>" type="text" class="form-control" name="JURUSAN" id="InputName" placeholder="Masukkan Kode Buku" required  disabled>
                </div>
				
               <div class="form-group" >
                    <label for="InputName">ALAMAT</label>
                    <input value="<?php  echo $dadi['ALAMAT']; ?>" type="text" class="form-control" name="ALAMAT" id="InputName" placeholder="Masukkan Kode Buku" required  disabled>
                </div> 

				
                <div class="form-group" >
                    <label for="InputName">HP</label>
                    <input value="<?php echo $dadi['HP']; ?>" type="text" class="form-control" name="HP" id="InputName" placeholder="Masukkan Kode Buku" required  disabled>
                </div>

				
		 <input type="submit" name="submit" id="submit" value="BACK" class="btn btn-info pull-right">
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