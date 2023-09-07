
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
    <title>Tambah User</title>
</head>
<body>
    <h1>Tambah Data User</h1>

    <form action="add_user.php" method="POST" name="addUser">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
            </tr>
        </table>
    </form>
    <form action="Data_User.php" method="POST">
                     <button type="submit">Kembali ke Data User</button>
                    </form>
   <!-- Handle permintaan POST dari form diatas -->
   <?php
        if(isset($_POST['Submit'])) {
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];

            // Memanggil koneksi menuju database
            include_once("connection.php");

            // Query untuk insert data ke database
            $result = mysqli_query($mysqli, 
            "INSERT INTO users (name,email,mobile) VALUES ('$name','$email','$mobile')");

            echo "Berhasil menambah user. <button href='Data_User.php'>Lihat User</button>";
        }
    ?>
</body>
</html>
