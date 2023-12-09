<?php
include 'connect.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $nama = $_POST['nama'];
    $status = implode(', ', $_POST['status']);
    $lama = $_POST['lama'];
    $jumlah = $_POST['jumlah'];

    $query = "UPDATE datatransaksi SET tanggal_masuk='$tanggal_masuk', nama='$nama', status='$status', lama='$lama', jumlah='$jumlah' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    header('Location: Data_transaksi.php');
    exit();
} else {
    $query = "SELECT * FROM datatransaksi WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $tanggal_masuk = $data['tanggal_masuk'];
        $nama = $data['nama'];
        $status = $data['status'];
        $lama = $data['lama'];
        $jumlah = $data['jumlah'];
    } else {
        echo "Data not found.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-popup">
        <form action="edit_transaksi.php?id=<?= $id ?>" method="POST" class="form-container">
            <h2>Edit Transaksi</h2>
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" id="tanggal_masuk" name="tanggal_masuk" value="<?= $tanggal_masuk ?>" required>

            <br>

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?= $nama ?>" required>

            <br>

            <label for="status">Status</label>
            <input type="checkbox" id="sudah_dibayar" name="status[]" value="Sudah Dibayar" <?= (strpos($status, 'Sudah Dibayar') !== false) ? 'checked' : '' ?>>
            <label for="sudah_dibayar">Sudah Dibayar</label>

            <input type="checkbox" id="belum_dibayar" name="status[]" value="Belum Dibayar" <?= (strpos($status, 'Belum Dibayar') !== false) ? 'checked' : '' ?>>
            <label for="belum_dibayar">Belum Dibayar</label>

            <br>

            <label for="lama">Lama</label>
            <input type="text" id="lama" name="lama" value="<?= $lama ?>" required>

            <br>

            <label for="jumlah">Jumlah</label>
            <input type="text" id="jumlah" name="jumlah" value="<?= $jumlah ?>" required>

            <br>

            <button type="submit" class="btn">Edit</button>
        </form>
    </div>
</body>
</html>
