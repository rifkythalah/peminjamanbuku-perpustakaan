<?php

session_start();

$title = 'Tambah siswa';

include 'layout/header.php';

// check apakah tombol tambah ditekan
if(isset ($_POST['tambah'])) {
    if (create_siswa($_POST) > 0) {
        echo "<script>
                alert('Data Siswa Berhasil Ditambahkan');
                document.location.href = 'siswa.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Siswa Gagal Ditambahkan');
                document.location.href = 'siswa.php';
            </script>";
    }
}

?>

    <div class="container mt-5">
    <h1>Tambah siswa</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama siswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama mahasiswa..."required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="kelas..."required>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control" required>
                    <?php $jurusan = $siswa['jurusan']; ?>
                    <option value="Teknik Informatika"<?= $jurusan == 'Teknik Informatika' ? 'selected' : null ?>>Teknik Informatika</option>
                    <option value="Sistem Informasi"<?= $jurusan == 'Sistem Informasi' ? 'selected' : null ?>>Sistem Informasi</option>
                    <option value="Teknik Elektro"<?= $jurusan == 'Teknik Elektro' ? 'selected' : null ?>>Teknik Elektro</option>
                </select>
            </div>
        </div>
        
        <button type="submit" name="tambah" class="btn btn-primary" style="float: right">Tambah</button>
    </form>
    
    </div>

<?php include 'layout/footer.php'?>