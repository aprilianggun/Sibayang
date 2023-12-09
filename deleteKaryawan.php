<?php
include 'connect.php';

$id = $_GET['id'];

// Hapus data dari tabel laporanoperasional yang terkait dengan karyawan yang akan dihapus
$queryDeleteLaporan = "DELETE FROM laporanoperasional WHERE id_karyawan = $id";
mysqli_query($conn, $queryDeleteLaporan);

// Hapus data dari tabel datakaryawan
$queryDeleteKaryawan = "DELETE FROM datakaryawan WHERE id = $id";
mysqli_query($conn, $queryDeleteKaryawan);

// Redirect kembali ke halaman Data_karyawan.php setelah menghapus data
header("Location: Data_karyawan.php");
exit();
?>
