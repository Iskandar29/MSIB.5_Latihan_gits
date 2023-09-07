<?php
include_once("connection.php");

// Update
if (isset($_POST['update'])) {
    $name = $_POST['name']; // Mengambil name dari form

    $newName = $_POST['newName']; // Mengambil newName dari form
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    // query untuk update data
    $query = mysqli_query($mysqli,
    "UPDATE users SET name='$newName', email='$email', mobile='$mobile' WHERE name='$name' ");

    header('Location: Data_User.php');
}
?>
