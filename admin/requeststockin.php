<?php
require "connect.php";
if (!$con) {
    echo "connection error";
}


$kodebarang = $_POST['kodebarang'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];

// Lakukan sanitasi data untuk mencegah SQL injection (opsional, tetapi sangat dianjurkan)
$kodebarang = mysqli_real_escape_string($con, $kodebarang);
$tanggal = mysqli_real_escape_string($con, $tanggal);
$jumlah = mysqli_real_escape_string($con, $jumlah);


// Query untuk melakukan INSERT data baru
$insert = "INSERT INTO stockin(kodebarang, tanggal, jumlah) VALUES ('$kodebarang', '$tanggal', '$jumlah')";
$query = mysqli_query($con, $insert);

if ($query) {
    echo json_encode('Succeed');
} else {
    echo json_encode('Failed to insert data');
}
?>
