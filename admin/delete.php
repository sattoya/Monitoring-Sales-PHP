<?php
include("connect.php");

$id = $_POST["id"];

$data= mysqli_query($con, "delete from offensehistory where id= '$id'");
if ($data) {
    echo json_encode([
        'pesan' => 'sukses']);
}else {
    echo json_encode([
        'pesan' => 'gagal']);
}
?>
