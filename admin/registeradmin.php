<?php
require "connect.php";
if (!$con) {
    echo "connection error";
}

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$notelp = $_POST['notelp'];
$encrypted_pwd = md5($password);
$sql = "SELECT * FROM useradmin WHERE email = '$email'";

$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo json_encode('Error');
} else {
    $insert = "INSERT INTO useradmin(name,password,email,notelp)VALUES('$name','$encrypted_pwd','$email','$notelp')";
    $query = mysqli_query($con, $insert);
    if ($query) {
        echo json_encode('Succeed');
    }
}
