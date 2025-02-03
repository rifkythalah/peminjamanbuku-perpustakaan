<?php

session_start();

$title = 'Ubah Buku';

include 'layout/header.php';

// mengambil id buku dari url
$id_buku = (int)$_GET['id_buku'];

$buku = select("SELECT * FROM buku WHERE id_buku = $id_buku")[0];

// check apakah tombol ubah ditekan
if(isset ($_POST['ubah'])) {
    if (update_buku($_POST) > 0) {
        echo "<script>
                alert('Data Buku Berhasil Diubah');
                document.location.href = 'buku.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Buku Gagal Diubah');
                document.location.href = 'buku.php';
            </script>";
    }
}

?>

    <div class="container mt-5">
    <h1>Ubah buku</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_buku" value="<?= $buku['id_buku'];?>">
        <div class="mb-3">
            <label for="judul_buku" class="form-label">judul buku</label>
            <input type="text" class="form-control" id="judul_buku" value="<?= $buku['judul_buku'];?>" name="judul_buku" placeholder="judul buku..."required>
        </div>
        <div class="mb-3">
            <label for="pengarang" class="form-label">pengarang</label>
            <input type="text" class="form-control" id="pengaran" value="<?= $buku['pengarang'];?>" name="pengarang" placeholder="pengarang buku..."required>
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">penerbit</label>
            <input type="text" class="form-control" id="penerbit" value="<?= $buku['penerbit'];?>" name="penerbit" placeholder="penerbit buku..."required>
        </div>
        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">tahun terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" value="<?= $buku['tahun_terbit'];?>" name="tahun_terbit" placeholder="tahun terbit buku..."required>
        </div>
        <div class="mb-3">
            <label for="stok_buku" class="form-label">stok buku</label>
            <input type="number" class="form-control" id="stok_buku" value="<?= $buku['stok_buku'];?>" name="stok_buku" placeholder="stok buku..."required>
        </div>
        <button type="submit" name="ubah" class="btn btn-primary" style="float: right">Ubah</button>
    </form>
    
    </div>

<?php include 'layout/footer.php'?>