<?php
require "connect.php";
if (!$con) {
    echo "connection error";
}

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$jobsales = $_POST['jobsales'];
$notelp = $_POST['notelp'];
$encrypted_pwd = md5($password);
$sql = "SELECT * FROM user WHERE email = '$email'";


$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo json_encode('Error');
} else {
    $insert = "INSERT INTO user(name,password,email,jobsales,notelp)VALUES('$name','$encrypted_pwd','$email','$jobsales','$notelp')";
    $query = mysqli_query($con, $insert);
    if ($query) {
        echo json_encode('Succeed');
    }
}
