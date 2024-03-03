<?php
include("connect.php");
$id = $_POST["id"];
$tanggal = $_POST["tanggal"];
$nama = $_POST["nama"];
$customer = $_POST["customer"];
$jumlah = $_POST["jumlah"];
$transportasi = $_POST["transportasi"];
$keterangan = $_POST["keterangan"];
$image = $_POST["image"];

$data= mysqli_query($con, "update image set tanggal='$tanggal', nama='$nama', customer='$customer', jumlah='$jumlah', transportasi='$transportasi', keterangan='$keterangan', image='$image' WHERE id='$id' " );

if ($data) {
    echo json_encode([
        'pesan' => 'sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'gagal'
    ]);
}
