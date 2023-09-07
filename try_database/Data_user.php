
<?php

// Memanggil koneksi menuju database
include_once("connection.php");

// Memanggil data dari database
$result = mysqli_query($mysqli, 'SELECT * FROM users');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Mahasiswa</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #444;
        }

        input[type=text] {
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

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 550px;
            margin: 16px auto;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
            position: relative;
        }

        th {
            background-color: #044d65;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td:after,
        th:after {
            content: '';
            position: absolute;
            top: 0;
            right: -1px;
            bottom: 0;
            width: 1px;
            background-color: black;
        }
        .actions {
            display: flex;
        }

        .actions button {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">MSIB.5</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Logout-->
      
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Menu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="Data_User.php">Data User</a>
                                <a class="nav-link" href="add_user.php">Tambah User</a>
                                
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data User</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data User</li>
                    </ol>

                   
                    <a href="http://localhost/MSIB_GITS.id/try_database/add_user.php">
    <button style="margin-top: 10px; background-color: #044d65; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer;">Tambah</button>
</a>



        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($user_data = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $user_data['name']; ?></td>
            <td><?php echo $user_data['mobile']; ?></td>
            <td><?php echo $user_data['email']; ?></td>
            <td>
            <a href="edit_user.php?name=<?php echo urlencode($user_data['name']); ?>">Edit</a>

                <a href="delete.php?name=<?php echo $user_data['name']; ?>">Delete</a>

            </td>
        </tr>
        <?php
            }
        ?>
            </tbody>
        </table>
    
                    <form action="index.php" method="POST">
                     <button type="submit">Kembali ke Dashboard</button>
                    </form>
                    
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">© 2023 Your Website. All Rights Reserved.</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
