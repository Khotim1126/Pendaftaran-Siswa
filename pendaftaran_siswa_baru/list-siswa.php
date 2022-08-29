<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
    <center>
<head>
    <title>Pendaftaran Siswa Baru | SMK N 1 Sayung</title>
    <style>
        body {
            background: url("langit2.jpg");
            background-size: 100%;
        }
    </style>
</head>
<link rel="stylesheet" herf="tampilan.css";>

<body>
    <header>
        <h2>Siswa yang sudah mendaftar</h2>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a><br>
        <a href="home.php">Home</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
    </center>
</html>