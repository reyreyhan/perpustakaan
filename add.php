<?php
include "go.php";
?>


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
    <h1>Selamat Datang! <small> Silahkan Absen</small></h1>
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
                    <label for="InputName">Kelas</label>
					<select class="form-control" id="sel1" name="KELAS">
                    <div class="input-group">
						<option>X</option>
						<option>XI</option>
						<option>XII</option>
						<option>XIII</option>
						<option>Alumni</option>
                    </div>
					</select>
                </div>
				
				<div class="form-group" hidden>
                    <label for="InputName">Tanggal</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="TGL" id="InputName" value="<?php $tgl=date('Y-m-d'); echo $tgl; ?>">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
			
                <input type="submit" name="submit" id="submit" value="Absen" class="btn btn-info pull-right">
				
            </div>
        </form>
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>