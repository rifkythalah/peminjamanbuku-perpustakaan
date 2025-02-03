<?php 
session_start();

include 'config/app.php';

// jika tombol tambah ditekan jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_akun($_POST) > 0) {
        echo "<script>
                alert('Data Akun Berhasil Ditambahkan');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Akun Gagal Ditambahkan');
                document.location.href = 'login.php';
            </script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">

    <title><?= $title; ?></title>
  </head>


  <body>
<div class="container mt-5">
    <h2>Register</h2>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="mb-3">
                <label for="level">Status</label>
                <select name="level" id="level" class="form-control" required>
                    <option value="">-- pilih status --</option>
                    <option value="1">Admin</option>
                    <option value="2">Petugas</option>
                    <option value="3">Siswa</option>
                </select>
            </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float: right">Register</button>
    </form>
    
    </div>