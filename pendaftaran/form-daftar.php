<!Doctype HTML>
<html>
<head>
	<meta charset="UTF-8">
<title>Play With Foundation 6</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="assest/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
 		<div class="col-lg-4">  
  		<div class="page-header">
   		<h3>Hello... </h3>
  		<h4>Silakan Masukan Data Diri Anda !</h4>
  	</div>
  	<form action="proses_pendaftaran.php" role="form" class="form-horizontal" method="POST">
  		
  		<input type="hidden" name="nim" value="<?php echo @$Nim; ?>">

  	   	<div class="form-group">
    		<label>Nim</label>
    		<input type="text" name="nim" class="form-control" required value="<?php echo @$nama; ?>">
   		</div>
   		<div class="form-group">
    		<label>Nama Lengkap</label>
    		<input type="text" name="nama" class="form-control" required value="<?php echo @$nama; ?>">
   		</div>
   		<div class="form-group">
    		<label>Jurusan</label>
    		<input type="text" name="jurusan" class="form-control" required value="<?php echo @$nama; ?>">
   		</div>
   		<div class="form-group">
    		<label>No.Tlp</label>
    		<input type="number" name="telepon" class="form-control" required value="<?php echo @$nama; ?>">
   		</div>
   		<div class="form-group">
    		<label>Email</label>
    		<input type="text" name="email" class="form-control" required value="<?php echo @$nama; ?>">
   		</div>
   		<div class="form-group">
    		<button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
    		<button type="reset" class="btn btn-danger">Reset</button>
   		</div>
  	</form>
</body>
</html>