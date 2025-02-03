<?php
    //akses file koneksi database
    include('config/database.php');
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $username = mysqli_real_escape_string($db, $user);
        $password = mysqli_real_escape_string($db, MD5($pass));
        
        //cek username dan password
        $sql = "SELECT `id_user`, `nama`, `level` FROM `akun` 
                WHERE `username`='$username' AND `password`='$password'";
        $query = mysqli_query($db, $sql);
        $jumlah = mysqli_num_rows($query);
        if (empty($user)) {
            header("Location: login.php?gagal=userKosong");
        } else if (empty($pass)) {
            header("Location: login.php?gagal=passKosong");
        } else if ($jumlah == 0) {
            header("Location: login.php?gagal=userpassSalah");
        } else {
            session_start();
            //get data
            while ($data = mysqli_fetch_row($query)) {
                $id_user = $data[0]; 
                $nama = $data[1]; 
                $level = $data[2]; 
                $_SESSION['id_user'] = $id_user;
                $_SESSION['nama'] = $nama;
                $_SESSION['level'] = $level;
                header("Location: user.php");
            }           
        }
    }
?>
