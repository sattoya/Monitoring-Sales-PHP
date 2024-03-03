<?php
require "connect.php";

$result = $con->query("SELECT * FROM pdftable ORDER BY id DESC");
$list = array();
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
echo json_encode($list);
}
