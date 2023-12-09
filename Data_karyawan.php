<?php
include 'connect.php';

$query = "SELECT * FROM datakaryawan";
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
            <li id="sign_in">Log Out</li>
            <li><a href="Data_karyawan.php"> Karyawan</a></li>
            <li><a href="Data_transaksi.php">Transaksi</a></li>
            <li><a href="Data_penyewa.php">Data Penyewa</a></li>
        </ul>
    </div>

    <h2 id="titleDataPenyewa">Jadwal Kegiatan Karyawan</h2>

    <div class="tableDataKaryawan">
        <table>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Kewajiban</th>
                <th>Posisi</th>
                <th>
                    <div class="tambah_data">
                        <a href="tambahKaryawan.php">
                            <img src="https://img.icons8.com/?size=512&id=1501&format=png">
                        </a>
                    </div>
                </th>
            </tr>

            <?php while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr align="center">
                    <td><?php echo isset($data['nama']) ? $data['nama'] : ''; ?></td>
                    <td><?php echo isset($data['jabatan']) ? $data['jabatan'] : ''; ?></td>
                    <td><?php echo isset($data['kewajiban']) ? $data['kewajiban'] : ''; ?></td>
                    <td><?php echo isset($data['posisi']) ? $data['posisi'] : ''; ?></td>
                    <td class="three-dot">
                        <div class="menu">
                            <img style="width:20px;" src="https://img.icons8.com/?size=512&id=98963&format=png">
                        </div>
                        <div class="menu-content">
                            <li><a href="editKaryawan.php?id=<?= $data['id'] ?>" data-id="<?= $data['id'] ?>">Edit</a></li>
                            <li><a href="deleteKaryawan.php?id=<?= $data['id'] ?>">Delete</a></li>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>

    <!-- Popup Form
    <div id="popup" class="overlay">
        <div class="popup">
            <h2>Tambah Karyawan</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <form action="insert.php" method="POST">
                    <input type="text" name="nama" placeholder="Nama">
                    <input type="text" name="jabatan" placeholder="Jabatan">
                    <input type="text" name="kewajiban" placeholder="Kewajiban">
                    <input type="text" name="posisi" placeholder="Posisi">
                    <button type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        var popup = document.getElementById('popup');
        var tambahData = document.querySelector('.tambah_data');

        tambahData.addEventListener('click', function() {
            popup.style.display = 'block';
        });

        var closeButton = document.querySelector('.close');
        closeButton.addEventListener('click', function() {
            popup.style.display = 'none';
        });
    </script> -->

</body>

</html>