<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah ada di tabel loginpengelola
    $query = "SELECT * FROM loginpengelola WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Redirect ke pengelolaAwal.php
        header("Location: pengelolaAwal.php");
        exit();
    }

    // Cek apakah ada di tabel loginkaryawan
    $query = "SELECT * FROM loginkaryawan WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Redirect ke profileKaryawan.php
        header("Location: profileKaryawan.php");
        exit();
    }

    // Jika tidak ditemukan pada kedua tabel, tampilkan pesan login gagal
    echo "Login Gagal";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
