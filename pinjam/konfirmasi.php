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
		$F = $_GET['NO'];
		$ndelok = "SELECT * FROM konfirmasi WHERE `konfirmasi` . `NO` = '$F'";
		$queryndelok = mysql_query($ndelok);
		
		while($dadi = mysql_fetch_array($queryndelok))
		{
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