<?php
include("connect.php");

$query = "SELECT `id`, `nama`, `customer`, `pengajuan`, `stock`, `jumlah`, `tujuan` FROM requeststock ORDER BY id DESC";
$exe = mysqli_query($con, $query);

$arr = [];

while ($row = mysqli_fetch_array($exe, MYSQLI_ASSOC)) {
    $arr[] = $row;
}

print(json_encode($arr));
?>
