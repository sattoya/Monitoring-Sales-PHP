<?php
include "connect.php";
    $nama = $_POST['nama'];
    $customer = $_POST['customer'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $transportasi = $_POST['transportasi'];
    $keterangan = $_POST['keterangan'];
    $image = $_FILES['image']['name'];
    $imagePath = "uploads/" . $image;

    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    $con->query("INSERT INTO image(nama, customer, tanggal, jumlah, transportasi, keterangan, image) 
        VALUES ('".$nama."','".$customer."','".$tanggal."','".$jumlah."','".$transportasi."','".$keterangan."','".$image."')");

?>
