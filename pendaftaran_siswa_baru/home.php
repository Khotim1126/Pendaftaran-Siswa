<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK N 1 Sayung</title>
    <style>
        body {
            background: url("langit2.jpg");
            background-size: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK N 1 Sayung</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../home.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
 
	<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>

    </body>
</html>