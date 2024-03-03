<?php
include("connect.php");
$id = $_POST["id"];
$tanggal = $_POST["tanggal"];
$nama = $_POST["nama"];
$customer = $_POST["customer"];
$stock = $_POST["stock"];
$pelanggaran = $_POST["pelanggaran"];

$data= mysqli_query($con, "update offensehistory set tanggal='$tanggal', nama='$nama', customer='$customer', stock='$stock', pelanggaran='$pelanggaran' WHERE id='$id' " );

if ($data) {
    echo json_encode([
        'pesan' => 'sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'gagal'
    ]);
}
