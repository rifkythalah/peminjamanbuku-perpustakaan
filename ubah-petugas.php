<?php

session_start();

$title = 'Ubah petugas';

include 'layout/header.php';

// check apakah tombol ubah ditekan
if(isset ($_POST['ubah'])) {
    if (update_petugas($_POST) > 0) {
        echo "<script>
                alert('Data Petugas Berhasil Diubah');
                document.location.href = 'petugas.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Petugas Gagal Diubah');
                document.location.href = 'petugas.php';
            </script>";
    }
}

//ambil id petugas dari url
$id_petugas = (int)$_GET['id_petugas'];

//query ambil data petugas
$petugas = select("SELECT * FROM petugas WHERE id_petugas = $id_petugas")[0];

?>

    <div class="container mt-5">
    <h1>Ubah siswa</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_petugas" value="<?= $petugas['id_petugas']; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama petugas</label>
            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Nama petugas..."required value="<?= $petugas['nama_petugas']; ?>">
        </div>

        <div class="row">
        <div class="mb-3 col-6">
        <label for="jabatan" class="form-label">jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="jabatan petugas..."required value="<?= $petugas['jabatan']; ?>">
            </div>

        <button type="submit" name="ubah" class="btn btn-primary" style="float: right">Ubah</button>
    </form>
    
    </div>

<?php include 'layout/footer.php'?>