<?php

session_start();

$title = 'Tambah Buku';

include 'layout/header.php';

// check apakah tombol tambah ditekan
if(isset ($_POST['tambah'])) {
    if (create_buku($_POST) > 0) {
        echo "<script>
                alert('Data Buku Berhasil Ditambahkan');
                document.location.href = 'buku.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Buku Gagal Ditambahkan');
                document.location.href = 'buku.php';
            </script>";
    }
}

?>

    <div class="container mt-5">
    <h1>Tambah Buku</h1>
    <hr>

    <form action="" method="post">
    <div class="mb-3">
            <label for="id_buku" class="form-label">Id Buku</label>
            <input type="number" class="form-control" id="id_buku" name="id_buku" placeholder="Id Buku..."required>
        </div>
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku..."required>
        </div>
        <div class="mb-3">
            <label for="pengarang" class="form-label">pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="pengarang buku..."required>
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="penerbit buku..."required>
        </div>
        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">tahun terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="tahun terbit buku..."required>
        </div>
        <div class="mb-3">
            <label for="stok_buku" class="form-label">stok buku</label>
            <input type="number" class="form-control" id="stok_buku" name="stok_buku" placeholder="stok buku..."required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary" style="float: right">Tambah</button>
    </form>
    
    </div>

<?php include 'layout/footer.php'?>