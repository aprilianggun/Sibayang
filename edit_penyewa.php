<?php
include 'connect.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $kamar_baru = $_POST['kamar'];
    $lama_penyewaan = $_POST['lama_penyewaan'];
    $status = $_POST['status'];

    $query = "UPDATE datapenyewa SET nama='$nama', email='$email', no_hp='$no_hp', tanggal_masuk='$tanggal_masuk', kamar='$kamar_baru', lama_penyewaan='$lama_penyewaan', status='$status' WHERE kamar='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: Data_penyewa.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    $query = "SELECT * FROM datapenyewa WHERE kamar='$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $nama = $data['nama'];
        $email = $data['email'];
        $no_hp = $data['no_hp'];
        $tanggal_masuk = $data['tanggal_masuk'];
        $kamar = $data['kamar'];
        $lama_penyewaan = $data['lama_penyewaan'];
        $status = $data['status'];
    } else {
        echo "Data tidak ditemukan.";
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
    <title>Edit Penyewa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Penyewa</h2>

    <form action="edit_penyewa.php?id=<?= $id ?>" method="POST">
        <div>
            <input type="text" name="nama" placeholder="Nama" value="<?= $nama ?>" required>
        </div>
        <div>
            <input type="text" name="email" placeholder="Alamat Email" value="<?= $email ?>" required>
        </div>
        <div>
            <input type="text" name="no_hp" placeholder="No HP" value="<?= $no_hp ?>" required>
        </div>
        <div>
            <input type="date" name="tanggal_masuk" placeholder="Tanggal Masuk" value="<?= $tanggal_masuk ?>" required>
        </div>
        <div>
            <input type="text" name="kamar" placeholder="No Kamar" value="<?= $kamar ?>" required>
        </div>
        <div>
            <input type="text" name="lama_penyewaan" placeholder="Lama Penyewaan" value="<?= $lama_penyewaan ?>" required>
        </div>
        <div>
            <input type="radio" name="status" id="status_berjalan" value="Berjalan" <?php if ($status === 'Berjalan') echo 'checked' ?> required>
            <label for="status_berjalan">Berjalan</label>
        </div>
        <div>
            <input type="radio" name="status" id="status_selesai" value="Selesai" <?php if ($status === 'Selesai') echo 'checked' ?> required>
            <label for="status_selesai">Selesai</label>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>
