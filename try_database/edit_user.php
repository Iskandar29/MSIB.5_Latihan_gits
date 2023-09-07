<?php
    include_once("connection.php");

    $name = urldecode($_GET['name']);


    // Query SQL untuk mengambil data pengguna berdasarkan username
    $sql = "SELECT * FROM users WHERE name = '$name'";
    $result = mysqli_query($mysqli, $sql);
    
    // Pastikan data ditemukan
    if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        $mobile = $user_data['mobile']; // Tambahkan baris ini untuk mendapatkan mobile dari hasil query
        $email = $user_data['email']; // Tambahkan baris ini untuk mendapatkan email dari hasil query
    } else {
        echo "Data tidak ditemukan.";
    }

?>

<style>
    input[type=text] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
    }

    input[type=number] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
    }

    input[type=date] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
    }

    button[type=submit] {
        background-color: #044d65;
        color: white;
        padding: 8px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 5px;
    }

    button[type=submit]:hover {
        background-color: #044d65;
    }
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit USer</h1>

    <form action="edit_process.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="newName" value="<?= $user_data['name'] ?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="mobile" value="<?= $mobile ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?= $email ?>"></td>
            </tr>
            <tr>
                <!-- Sembunyikan input name -->
                <input type="hidden" name="name" value="<?= $user_data['name'] ?>">
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

    <form action="Data_User.php" method="POST">
        <button type="submit">Kembali ke Dashboard</button>
    </form>
</body>
</html>
