<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_karyawan = $_POST['id_karyawan'];
    $status = $_POST['status'];

    $query = "UPDATE laporanoperasional SET status='$status' WHERE id_karyawan='$id_karyawan'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: laporan_operasional.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>