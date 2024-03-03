<?php
include("connect.php");

$id = $_POST["nama"];

$data= mysqli_query($con, "delete from image where id = '$nama'");
if ($data) {
    echo json_encode([
        'pesan' => 'sukses']);
}else {
    echo json_encode([
        'pesan' => 'gagal']);
}
?>
