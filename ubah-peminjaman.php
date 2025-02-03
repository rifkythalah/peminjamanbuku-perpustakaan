<?php

session_start();

$title = 'Ubah Peminjaman';

include 'layout/header.php';

// Mengambil id peminjaman dari URL
$id_peminjaman = (int)$_GET['id_peminjaman'];

// Menampilkan data peminjaman beserta detail siswa, buku, dan petugas
$peminjaman = select("
    SELECT 
        peminjaman.*, 
        siswa.nama AS nama_siswa, 
        buku.judul_buku, 
        petugas.nama_petugas 
    FROM peminjaman
    JOIN siswa ON peminjaman.id_siswa = siswa.nis
    JOIN buku ON peminjaman.id_buku = buku.id_buku
    JOIN petugas ON peminjaman.id_petugas = petugas.id_petugas
    WHERE peminjaman.id_peminjaman = $id_peminjaman
")[0];

// Check apakah tombol ubah ditekan
if(isset($_POST['ubah'])) {
    if (update_peminjaman($_POST) > 0) {
        echo "<script>
                alert('Data Peminjaman Berhasil Diubah');
                document.location.href = 'peminjaman.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Peminjaman Gagal Diubah');
                document.location.href = 'peminjaman.php';
              </script>";
    }
}

?>

<div class="container mt-5">
    <h1>Ubah Peminjaman</h1>
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'];?>">
        <div class="mb-3">
            <label for="id_siswa" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="id_siswa" value="<?= $peminjaman['id_siswa'];?>" name="id_siswa"
                placeholder="Nama siswa..." required>
        </div>
        <div class="mb-3">
            <label for="id_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="id_buku" value="<?= $peminjaman['id_buku'];?>" name="id_buku"
                placeholder="Judul buku..." required>
        </div>
        <div class="mb-3">
            <label for="id_petugas" class="form-label">Nama Petugas</label>
            <input type="text" class="form-control" id="id_petugas" value="<?= $peminjaman['id_petugas'];?>"
                name="id_petugas" placeholder="Nama petugas..." required>
        </div>
        <div class="mb-3">
            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tgl_pinjam" value="<?= $peminjaman['tgl_pinjam'];?>"
                name="tgl_pinjam" required>
        </div>
        <div class="mb-3">
            <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tgl_kembali" value="<?= $peminjaman['tgl_kembali'];?>"
                name="tgl_kembali" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" value="<?= $peminjaman['status'];?>" name="status"
                required>
        </div>
        <button type="submit" name="ubah" class="btn btn-primary" style="float: right">Ubah</button>
    </form>
</div>

<?php include 'layout/footer.php'; ?>