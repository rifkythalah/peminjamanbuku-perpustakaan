<?php

session_start();

$title = 'Tambah Peminjaman';

include 'layout/header.php';

// check apakah tombol tambah ditekan
if(isset($_POST['tambah'])) {
    if (create_peminjaman($_POST) > 0) {
        echo "<script>
                alert('Data Peminjaman Berhasil Ditambahkan');
                document.location.href = 'peminjaman.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Peminjaman Gagal Ditambahkan');
                document.location.href = 'peminjaman.php';
            </script>";
    }
}

?>

<div class="container mt-5">
    <h1>Tambah Peminjaman</h1>
    <hr>

    <form action="" method="post">
        <div class="mb-3">
            <label for="id_siswa" class="form-label">NIS</label>
            <input type="number" class="form-control" id="id_siswa" name="id_siswa" placeholder="Id Siswa..." required>
        </div>
        <div class="mb-3">
            <label for="id_buku" class="form-label">Id Buku</label>
            <input type="number" class="form-control" id="id_buku" name="id_buku" placeholder="Id Buku..." required>
        </div>
        <div class="mb-3">
            <label for="id_petugas" class="form-label">Id Petugas</label>
            <input type="number" class="form-control" id="id_petugas" name="id_petugas" placeholder="Id Petugas..." required>
        </div>
        <div class="mb-3">
            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
        </div>
        <div class="mb-3">
            <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary" style="float: right">Tambah</button>
    </form>
    
</div>

<?php include 'layout/footer.php'?>
