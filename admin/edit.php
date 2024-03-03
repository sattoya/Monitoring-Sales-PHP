<?php
include("connect.php");

$query = "SELECT * FROM offensehistory ORDER BY id DESC ";
$exe = mysqli_query($con, $query);

$arr = [];

while ($row = mysqli_fetch_array($exe, MYSQLI_ASSOC)) {
    $arr[] = $row;
}

print(json_encode($arr));
?>
