<?php
// Koneksi ke database
include 'connect.php';

// Menerima data dari permintaan Ajax
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];
$status = $data['status'];

// Melakukan pembaruan status di database
$query = "UPDATE datakaryawan SET status = '$status' WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    // Pembaruan berhasil
    $response = array('success' => true, 'message' => 'Status updated successfully');
} else {
    // Pembaruan gagal
    $response = array('success' => false, 'message' => 'Failed to update status');
}

// Mengirim respons dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
