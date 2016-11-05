<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Selamat Datang! <small> Silahkan Tambahkan Buku</small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form"  name="" method="POST" action="hore.php">
            <div class="col-lg-6">
			
			    <div class="form-group">
                    <label for="InputName">Judul</label>
                    <input type="text" class="form-control" name="JUDUL" id="InputName" placeholder="Masukkan Judul" required>
                </div>
			
                <div class="form-group">
                    <label for="InputName">Pengarang</label>
                    <input type="text" class="form-control" name="PENGARANG" id="InputName" placeholder="Masukkan Pengarang" required>
                </div>
				
				<div class="form-group">
                    <label for="InputName">Penerbit</label>
                    <input type="text" class="form-control" name="PENERBIT" id="InputName" placeholder="Masukkan Penerbit" required>
                </div>
			
			    <div class="form-group">
                    <label for="InputName">Tahun</label>
					<select class="form-control" id="sel1" name="TAHUN">
                    <div class="input-group">
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
						<option>2008</option>
						<option>2009</option>
						<option>2010</option>
						<option>2011</option>
						<option>2012</option>
						<option>2013</option>
						<option>2014</option>
						<option>2015</option>
						<option>2016</option>
                    </div>
					</select>
                </div>
				
                <div class="form-group">
                    <label for="InputName">Kategori</label>
					<select class="form-control" id="sel1" name="KATEGORI">
                    <div class="input-group">
						<option>Agama</option>
						<option>Biografi</option>
						<option>Matematika</option>
						<option>Kamus</option>
						<option>Biologi</option>
						<option>Umum</option>
						<option>Novel</option>
                    </div>
					</select>
                </div>
				
                <div class="form-group">
                    <label for="InputName">Kode Buku</label>
                    <input type="text" class="form-control" name="CODE" id="InputName" placeholder="Masukkan Kode Buku" required>
                </div>
			
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
				
            </div>
        </form>
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>