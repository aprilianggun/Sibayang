<?php
include 'connect.php';

$query = "SELECT * FROM datatransaksi";
$sql = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <ul class="navbar-left">
            <li id="sibayang">SiBayang</li>
        </ul>

        <ul class="navbar-right">
            <li><a href = "index.php" id="sign_in">Log Out</a></li>
            <li><a href="Data_karyawan.php"> Karyawan</a></li>
            <li><a href="Data_transaksi.php">Transaksi</a></li>
            <li><a href="Data_penyewa.php">Data Penyewa</a></li>
        </ul>
    </div>

    <h2 id="titleDataPenyewa">Data Transaksi</h2>

    <div class="tableDataTransaksi">
        <table>
            <tr>
                <th>Tanggal Masuk</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Lama</th>
                <th>Jumlah</th>
                <th><a href="tambahTransaksi.php">
                        <div class="tambah_data"><img src="https://img.icons8.com/?size=512&id=1501&format=png"></div>
                    </a></th>
            </tr>

            <tr>
                <?php while ($data = mysqli_fetch_array($sql)) {
                ?>
            <tr class="data" align="center">
                <td><?php echo $data['tanggal_masuk']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><?php echo $data['lama']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
                <td class="three-dot">
                    <div class="menu">
                        <img style="width:20px;" src="https://img.icons8.com/?size=512&id=98963&format=png">
                    </div>
                    <div class="menu-content">
                        <li><a href="edit_transaksi.php?id=<?= $data['id'] ?>" data-id="<?= $data['id'] ?>">Edit</a></li>
                        <li><a href="deleteTransaksi.php?id=<?= $data['id'] ?>">Delete</a></li>
                    </div>
                </td>
            </tr>
        <?php
                }
        ?>
        </tr>
        <table>
    </div>
</body>

</html>