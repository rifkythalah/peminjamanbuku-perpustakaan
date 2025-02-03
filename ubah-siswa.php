<?php

session_start();

$title = 'Ubah siswa';

include 'layout/header.php';

// check apakah tombol ubah ditekan
if(isset ($_POST['ubah'])) {
    if (update_siswa($_POST) > 0) {
        echo "<script>
                alert('Data Siswa Berhasil Diubah');
                document.location.href = 'siswa.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Siswa Gagal Diubah');
                document.location.href = 'siswa.php';
            </script>";
    }
}

//ambil id siswa dari url
$nis = (int)$_GET['nis'];

//query ambil data siswa
$siswa = select("SELECT * FROM siswa WHERE nis = $nis")[0];

?>

    <div class="container mt-5">
    <h1>Ubah siswa</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nis" value="<?= $siswa['nis']; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama siswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama mahasiswa..."required value="<?= $siswa['nama']; ?>">
        </div>

        <div class="row">
        <div class="mb-3 col-6">
        <label for="kelas" class="form-label">kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="kelas siswa..."required value="<?= $siswa['kelas']; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control" required>
                    <?php $jurusan = $siswa['jurusan']; ?>
                    <option value="Teknik Informatika"<?= $jurusan == 'Teknik Informatika' ? 'selected' : null ?>>Teknik Informatika</option>
                    <option value="Sistem Informasi"<?= $jurusan == 'Sistem Informasi' ? 'selected' : null ?>>Sistem Informasi</option>
                    <option value="Teknik Elektro"<?= $jurusan == 'Teknik Elektro' ? 'selected' : null ?>>Teknik Elektro</option>
                </select>
            </div>

          

        <button type="submit" name="ubah" class="btn btn-primary" style="float: right">Ubah</button>
    </form>
    
    </div>

<?php include 'layout/footer.php'?>