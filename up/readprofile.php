<?php
// Pastikan session sudah di-start sebelum mengakses $_SESSION
session_start();

include("connect.php");

// Pastikan ada session 'id' yang telah di-set setelah proses login
if (isset($_SESSION['name'])) {
    // Gantikan 'user_id' dengan kolom atau informasi yang sesuai untuk identifikasi pengguna yang telah diloginkan
    $name = $_SESSION['name']; // Misalnya, jika menggunakan session, sesuaikan dengan key session yang sesuai

    // Ubah query untuk mengambil data sesuai dengan pengguna yang telah diloginkan
    $query = "SELECT `name`, `email`, `jobsales`, `notelp` FROM user WHERE `name` = '$name'";

    $exe = mysqli_query($con, $query);

    if (!$exe) {
        die('Query error: ' . mysqli_error($con));
    }

    $arr = [];

    while ($row = mysqli_fetch_array($exe, MYSQLI_ASSOC)) {
        $arr[] = $row;
    }

    // Pastikan untuk mengirimkan header dengan format JSON
    header('Content-Type: application/json');

    // Tampilkan data dalam format JSON
    echo json_encode($arr);
} else {
    // Jika tidak ada session 'id', artinya pengguna belum login atau sesi telah berakhir
    echo "User not logged in.";
}
?>
