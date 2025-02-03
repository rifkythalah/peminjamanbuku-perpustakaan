<?php

include 'config/app.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
    <style>
        .header {
            background-color: darkblue;
        }
        .header .navbar-brand{
            color: white; 
        }
        .header .nav-link.text-info {
            color: white !important;
        }
        .header .nav-link.text-info:hover {
            color: cyan !important;
        }
        .header .nav-link.text-danger {
            color: red !important; 
        }
        .header .nav-link.text-danger:hover {
            color: #bd2130 !important; 
        }
    </style>

    <title><?= $title; ?></title>
  </head>

  <body>
    <div>
        <nav class="navbar navbar-expand-lg header">
            <div class="container">
                <a class="navbar-brand" href="#"><b>Perpustakaan</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-info" href="user.php">Akun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="buku.php">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="siswa.php">Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="petugas.php">Petugas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="peminjaman.php">Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="logout.php" onclick="return confirm('Yakin ingin keluar?')">Keluar</a>
                        </li>
                    </ul>
                </div>
                <div>
                  <a class="navbar-brand" href="#">Selamat Datang <?= $_SESSION['nama'];?> </a>
                </div>
            </div>
        </nav>
    </div>
  </body>
</html>
