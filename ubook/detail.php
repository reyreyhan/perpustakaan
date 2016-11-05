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
        <form role="form"  name="MF" method="POST" action="index.php">
		
            <div class="col-lg-6">
			
	<?php
		$F = $_GET['CODE'];
		$ndelok = "SELECT * FROM data_buku WHERE `data_buku` . `CODE` = '$F'";
		$queryndelok = mysql_query($ndelok);
		
		while($dadi = mysql_fetch_array($queryndelok))
		{
	?>
			
			    <div class="form-group">
                    <label for="InputName">JUDUL BUKU</label>
                    <input value="<?php echo $dadi['JUDUL']; ?>" type="text" class="form-control" name="JUDUL" id="InputName" placeholder="Masukkan Judul" required  disabled>
                </div>
				
                <div class="form-group" >
                    <label for="InputName">PENGARANG</label>
					<input value="<?php echo $dadi['PENGARANG']; ?>" type="text" class="form-control" name="PENGARANG" id="InputName" placeholder="Masukkan Kategori" required  disabled>
                </div>
				
				<div class="form-group" >
                    <label for="InputName">PENERBIT</label>
                    <input value="<?php echo $dadi['PENERBIT']; ?>" type="text" class="form-control" name="PENERBIT" id="InputName" placeholder="Masukkan NIS" required  disabled>
                </div>
				
                <div class="form-group" >
                    <label for="InputName">TAHUN TERBIT</label>
                    <input value="<?php echo $dadi['TAHUN']; ?>" type="text" class="form-control" name="TAHUN" id="InputName" placeholder="Masukkan Kode Buku" required  disabled>
                </div>
				
               <div class="form-group" >
                    <label for="InputName">KATEGORI</label>
                    <input value="<?php  echo $dadi['KATEGORI']; ?>" type="text" class="form-control" name="KATEGORI" id="InputName" placeholder="Masukkan Kode Buku" required  disabled>
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