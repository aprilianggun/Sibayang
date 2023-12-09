<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $nama = $_POST['nama'];
    $status = implode(', ', $_POST['status']);
    $lama = $_POST['lama'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO datatransaksi (tanggal_masuk, nama, status, lama, jumlah) VALUES ('$tanggal_masuk', '$nama', '$status', '$lama', '$jumlah')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect back to Data_transaksi.php after successful insertion
        header("Location: Data_transaksi.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-popup">
        <form action="tambahTransaksi.php" method="POST" class="form-container">
            <h2>Tambah Transaksi</h2>
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" id="tanggal_masuk" name="tanggal_masuk" required>

            <br>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <br>

            <label for="status">Status</label>
            <input type="checkbox" id="sudah_dibayar" name="status[]" value="Sudah Dibayar">
            <label for="sudah_dibayar">Sudah Dibayar</label>

            <input type="checkbox" id="belum_dibayar" name="status[]" value="Belum Dibayar">
            <label for="belum_dibayar">Belum Dibayar</label>

            <br>

            <label for="lama">Lama</label>
            <input type="text" id="lama" name="lama" required>

            <br>

            <label for="jumlah">Jumlah</label>
            <input type="text" id="jumlah" name="jumlah" required>

            <br>

            <button type="submit" class="btn">Tambah</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Batal</button>
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementsByClassName("form-popup")[0].style.display = "block";
        }

        function closeForm() {
            document.getElementsByClassName("form-popup")[0].style.display = "none";
        }
    </script>
</body>
</html>
