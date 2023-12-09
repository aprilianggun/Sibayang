<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $kewajiban = $_POST['kewajiban'];
    $posisi = $_POST['posisi'];

    $query = "INSERT INTO datakaryawan (nama, jabatan, kewajiban, posisi) VALUES ('$nama', '$jabatan', '$kewajiban', '$posisi')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect back to Data_karyawan.php after successful insertion
        header("Location: Data_karyawan.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
