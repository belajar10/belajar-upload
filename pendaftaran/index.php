<!DOCTYPE html>
<html>
<head>
    <title>Coconut PlayGround 2018</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Peserta</h3>
        <h1>WORKSHOP</h1>
    </header>

    <h4>Menu</h4>
    <nav>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
           
        </ul>
    </nav>

    </body>
</html>