<?php
require "connect.php";
if (!$con) {
    echo "connection error";
}

$nama = $_POST['nama'];
$customer = $_POST['customer'];
$pengajuan = $_POST['pengajuan'];
$stock = $_POST['stock'];
$jumlah = $_POST['jumlah'];
$tujuan = $_POST['tujuan'];


// Query untuk melakukan INSERT data baru
$insert = "INSERT INTO requeststock (nama, customer, pengajuan, stock, jumlah, tujuan) VALUES ('$nama', '$customer', '$pengajuan', '$stock', '$jumlah', '$tujuan')";
$query = mysqli_query($con, $insert);

if ($query) {
    echo json_encode('Succeed');
} else {
    echo json_encode('Failed to insert data');
}
?>
