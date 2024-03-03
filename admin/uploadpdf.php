<?php
include "connect.php";
    $name = $_POST['name'];
    $pdffile = $_FILES['pdffile']['name'];
    $pdfpath = "pdf/" . $pdffile;

    move_uploaded_file($_FILES['pdffile']['tmp_name'], $pdfpath);
    $con->query("INSERT INTO pdftable(name, pdffile) 
        VALUES ('".$name."','".$pdffile."')");

?>
