<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $kewajiban = $_POST['kewajiban'];
    $posisi = $_POST['posisi'];

    $query = "INSERT INTO datakaryawan (nama, jabatan, kewajiban, posisi) VALUES ('$nama', '$jabatan', '$kewajiban', '$posisi')";
    $result = mysqli_query($conn, $query);

    header('Location: Data_karyawan.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Tambah Karyawan</h2>

    <form action="tambahKaryawan.php" method="POST">
            <input type="text" name="nama" placeholder="Nama" required> <br>
            <input type="text" name="jabatan" placeholder="Jabatan" required> <br>
            <input type="text" name="kewajiban" placeholder="Kewajiban" required> <br>
            <input type="text" name="posisi" placeholder="Posisi" required> <br>
            <button type="submit">Tambah</button>
    </form>
</body>

</html>