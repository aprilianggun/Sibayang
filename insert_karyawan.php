<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menerima data dari form
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $kewajiban = $_POST['kewajiban'];
    $posisi = $_POST['posisi'];

    // Menyisipkan data karyawan ke database
    $query = "INSERT INTO datakaryawan (nama, jabatan, kewajiban, posisi) VALUES ('$nama', '$jabatan', '$kewajiban', '$posisi')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Penyisipan berhasil
        echo "<script>alert('Karyawan berhasil ditambahkan');</script>";
    } else {
        // Penyisipan gagal
        echo "<script>alert('Gagal menambahkan karyawan');</script>";
    }
}
