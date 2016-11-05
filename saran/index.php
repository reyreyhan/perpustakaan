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
    <h1>Silahkan Beri Pesan!  <small></small></h1>
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
                    <label for="InputName">Email</label>
					<input type="text" class="form-control" name="EMAIL" id="InputName" placeholder="Masukkan Email" required>
                </div>
				
                <div class="form-group">
                    <label for="InputName">Pesan</label>
					<textarea type="text" class="form-control" name="KOM" id="InputName" placeholder="Beri Kami Saran" required></textarea>
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