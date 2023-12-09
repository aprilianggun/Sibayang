<?php
include 'connect.php';

$query = "SELECT l.id_karyawan, l.posisi, l.status, d.nama, d.jabatan, d.kewajiban FROM laporanoperasional l LEFT JOIN datakaryawan d ON l.id_karyawan = d.id";
$sql = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Operasional</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profileKaryawan.css">

    <style>
        table {
            text-align: left;
            border-collapse: collapse;
            width: 90%;
            margin: auto;
            font-size: small;
        }

        tr {
            border-bottom: 1px solid grey;
        }

        th,
        td {
            text-align: left;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <ul class="navbar-left">
            <li id="sibayang">SiBayang</li>
        </ul>

        <ul class="navbar-right">
            <li><a href="profileKaryawan.php">Beranda</a></li>
            <li><a href="#">Operasional</a></li>
            <img src="nav.png">
            <li><a href="index.php" class="logout">Log Out</a></li>
        </ul>

    </div>

    <h2 id="titleLaporanOperasional">Laporan Operasional</h2>

    <div class="tableLaporanOperasional">
        <table>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Kewajiban</th>
                <th>Posisi</th>
                <th>Status</th>
            </tr>

            <?php while ($data = mysqli_fetch_array($sql)) { ?>
                <tr align="center">
                    <td><?php echo isset($data['nama']) ? $data['nama'] : ''; ?></td>
                    <td><?php echo isset($data['jabatan']) ? $data['jabatan'] : ''; ?></td>
                    <td><?php echo isset($data['kewajiban']) ? $data['kewajiban'] : ''; ?></td>
                    <td><?php echo isset($data['posisi']) ? $data['posisi'] : ''; ?></td>
                    <td>
                        <form method="POST" action="proses_laporan.php">
                            <input type="hidden" name="id_karyawan" value="<?php echo isset($data['id_karyawan']) ? $data['id_karyawan'] : ''; ?>">
                            <select name="status" onchange="this.form.submit()">
                                <option value="Sedang Diperbaiki" <?php if ($data['status'] == 'Sedang Diperbaiki') echo 'selected'; ?>>Sedang Diperbaiki</option>
                                <option value="Selesai" <?php if ($data['status'] == 'Selesai') echo 'selected'; ?>>Selesai</option>
                            </select>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <!-- Footer -->
    <!-- ... Your footer code here ... -->
</body>

</html>