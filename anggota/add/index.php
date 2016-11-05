

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
    <h1>Selamat Datang! <small> Tambahkan Anggota</small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form"  name="" method="POST" action="hore.php">
            <div class="col-lg-6">
			
                <div class="form-group">
                    <label for="InputName">Nama</label>
                    <input type="text" class="form-control" name="NAMA" id="InputName" placeholder="Masukkan Nama" required>
                </div>
			
			    <div class="form-group">
                    <label for="InputName">Kelas</label>
					<select class="form-control" id="sel1" name="KELAS">
                    <div class="input-group">
						<option>X</option>
						<option>XI</option>
						<option>XII</option>
                    </div>
					</select>
                </div>
				
                <div class="form-group">
                    <label for="InputName">Jurusan</label>
					<select class="form-control" id="sel1" name="JURUSAN">
                    <div class="input-group">
						<option>Teknik Komputer & Jaringan</option>
						<option>Gambar Rancang Bangun Kapal</option>
						<option>Teknologi Pengelasan Kapal</option>
						<option>Teknik Pemesinan Kapal</option>
						<option>Instalasi Pemesinan Kapal</option>
						<option>Mekanik Otomotif</option>
						<option>Teknik Pendingin Tata Udara</option>
						<option>Interior Kapal</option>
						<option>Konstruksi Kapal Baja</option>
						<option>Kelistrikan Kapal</option>
                    </div>
					</select>
                </div>
		
				<div class="form-group">
                    <label for="InputName">NIS</label>
                    <input type="number" class="form-control" name="NIS" id="InputName" placeholder="Masukkan NIS" required>
                </div>		
		
                <div class="form-group">
                    <label for="InputName">Jenis Kelamin</label>
					<select class="form-control" id="sel1" name="JK">
                    <div class="input-group">
						<option value ="L">Laki - Laki</option>
						<option value ="P">Perempuan</option>
                    </div>
					</select>
                </div>
				
                <div class="form-group">
                    <label for="InputName">Alamat</label>
                    <textarea type="text" class="form-control" name="ALAMAT" id="InputName" placeholder="Masukkan Alamat" required></textarea>
                </div>
				
				<div class="form-group">
                    <label for="InputName">HP</label>
                    <input type="number" class="form-control" name="HP" id="InputName" placeholder="Masukkan Nomor HP" required>
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