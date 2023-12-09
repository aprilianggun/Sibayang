<?php
include 'connect.php';

$id = $_GET['id'];

$query = "SELECT * FROM datakaryawan WHERE id='$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $kewajiban = $_POST['kewajiban'];
    $posisi = $_POST['posisi'];

    $query = "UPDATE datakaryawan SET nama='$nama', kewajiban='$kewajiban', posisi='$posisi' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: Data_karyawan.php');
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
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header and Navigation -->
    <!-- ... Your header and navigation code here ... -->

    <h2 id="titleEditKaryawan">Edit Karyawan</h2>

    <form method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?php echo isset($data['nama']) ? $data['nama'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="kewajiban">Kewajiban</label>
            <input type="text" id="kewajiban" name="kewajiban" value="<?php echo isset($data['kewajiban']) ? $data['kewajiban'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="posisi">Posisi</label>
            <input type="text" id="posisi" name="posisi" value="<?php echo isset($data['posisi']) ? $data['posisi'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Simpan</button>
        </div>
    </form>

    <!-- Footer -->
    <!-- ... Your footer code here ... -->
</body>
</html>
