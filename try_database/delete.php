<?php

    include_once("connection.php");

    $name = $_GET['name'];

// Query SQL untuk menghapus data berdasarkan nama
$sql = "DELETE FROM users WHERE name = '$name'";

if (mysqli_query($mysqli, $sql)) {
    echo "Data berhasil dihapus.";
} else {
    echo "Terjadi kesalahan saat menghapus data: " . mysqli_error($mysqli);
}


    header("Location:index.php");
?>
