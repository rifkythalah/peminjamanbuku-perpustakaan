<?php

session_start();

$title = 'Tambah petugas';

include 'layout/header.php';

// check apakah tombol tambah ditekan
if(isset ($_POST['tambah'])) {
    if (create_petugas($_POST) > 0) {
        echo "<script>
                alert('Data Petugas Berhasil Ditambahkan');
                document.location.href = 'petugas.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Petugas Gagal Ditambahkan');
                document.location.href = 'petugas.php';
            </script>";
    }
}

?>

    <div class="container mt-5">
    <h1>Tambah petugas</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
            <label for="id_petugas" class="form-label">Id petugas</label>
            <input type="number" class="form-control" id="id_petugas" name="id_petugas" placeholder="Id petugas..."required>
        </div>
        <div class="mb-3">
            <label for="nama_petugas" class="form-label">Nama petugas</label>
            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Nama petugas..."required>
        </div>
        <div class="mb-3">
                <label for="jabatan">Jabatan</label>
                <select name="jabatan" id="jabatan" class="form-control" required>
                    <option value="">-- pilih status --</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                </select>
            </div>

        <button type="submit" name="tambah" class="btn btn-primary" style="float: right">Tambah</button>
    </form>
    
    </div>

<?php include 'layout/footer.php'?>