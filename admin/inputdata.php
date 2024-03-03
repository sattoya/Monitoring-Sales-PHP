<?php
require "connect.php";
if (!$con) {
    echo "connection error";
}

$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$customer = $_POST['customer'];
$stock = $_POST['stock'];
$pelanggaran = $_POST['pelanggaran'];
// Lakukan sanitasi data untuk mencegah SQL injection (opsional, tetapi sangat dianjurkan)
$tanggal= mysqli_real_escape_string($con, $tanggal);
$nama = mysqli_real_escape_string($con, $nama);
$customer = mysqli_real_escape_string($con, $customer);
$stock = mysqli_real_escape_string($con, $stock);
$pelanggaran = mysqli_real_escape_string($con, $pelanggaran);

// Query untuk melakukan INSERT data baru
$insert = "INSERT INTO offensehistory(tanggal, nama, customer, stock, pelanggaran) VALUES ('$tanggal', '$nama', '$customer', '$stock', '$pelanggaran')";
$query = mysqli_query($con, $insert);

if ($query) {
    echo json_encode('Succeed');
} else {
    echo json_encode('Failed to insert data');
}
?>
