<?php

session_start();

$title = 'Daftar Akun';

include 'layout/header.php';

// tampil seluruh data
$data_akun = select("SELECT * FROM akun ");

// tampil data berdasarkan user login
$id_user = $_SESSION['id_user'];
$data_bylogin = select("SELECT * FROM akun WHERE id_user = $id_user ");


// jika tombol tambah ditekan jalankan script berikut
if (isset($_POST['tambah'])) {
    if (create_akun($_POST) > 0) {
        echo "<script>
                alert('Data Akun Berhasil Ditambahkan');
                document.location.href = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Akun Gagal Ditambahkan');
                document.location.href = 'user.php';
            </script>";
    }
}

// jika tombol ubah ditekan jalankan script berikut
if (isset($_POST['ubah'])) {
    if (update_akun($_POST) > 0) {
        echo "<script>
                alert('Data Akun Berhasil Diubah');
                document.location.href = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Akun Gagal Diubah');
                document.location.href = 'user.php';
            </script>";
    }
}


?>

    <div class="container mt-5">
    <h1><i class="fas fa-user"></i> Data Akun</h1>
    <hr>

    <?php if ($_SESSION['level'] == 1) :?>
      <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fas fa-plus-circle"></i> Tambah</button>
    <?php endif;?>

    <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1;?>
            <!-- tampil seluruh data -->
            <?php if ($_SESSION['level'] == 1) :?>
            <?php foreach ($data_akun as $akun) :?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $akun['nama'];?></td>
                    <td><?= $akun['username'];?></td>
                    <td>Password Ter-enkripsi</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $akun['id_user'];?>"><i class="fas fa-edit"></i> Ubah</button>
                        <button type="button" class="btn btn-danger mb-1" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $akun['id_user'];?>"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </td>
                </tr>
            <?php endforeach;?>
            <?php else :?>
              <!-- tampil data berdasarkan user login -->
              <?php foreach ($data_bylogin as $akun) :?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $akun['nama'];?></td>
                    <td><?= $akun['username'];?></td>
                    <td>Password Ter-enkripsi</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $akun['id_user'];?>">Ubah</button>
                    </td>
                </tr>
            <?php endforeach;?>
            <?php endif;?>
        </tbody>
    </table>
    </div>

    <!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php foreach ($data_akun as $akun) :?>
    <!-- Modal Ubah -->
    <div class="modal fade" id="modalUbah<?= $akun['id_user'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <input type="hidden" name="id_user" value="<?= $akun['id_user'];?>">
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $akun['nama'];?>" required>
            </div>

            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= $akun['username'];?>" required>
            </div>

            <div class="mb-3">
                <label for="password">Password <small>(masukkan password baru/lama)</small></label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <?php if ($_SESSION['level'] == 1) :?>
              <div class="mb-3">
                <label for="level">Level</label>
                <select name="level" id="level" class="form-control" required>
                    <?php $level = $akun['level'];?>
                    <option value="1" <?= $level == '1' ? 'selected' : null ?>>Admin</option>
                    <option value="2" <?= $level == '2' ? 'selected' : null ?>>Petugas</option>
                    <option value="3" <?= $level == '3' ? 'selected' : null ?>>Siswa</option>
                </select>
            </div>
            <?php else : ?>
              <input type="hidden" name="level" value="<?= $akun['level'];?>">
            <?php endif;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach;?>

<!-- Modal Hapus -->
<?php foreach ($data_akun as $akun):?>
<div class="modal fade" id="modalHapus<?= $akun['id_user'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <p>Yakin Ingin Menghapus Data Akun : <?= $akun['nama'];?> ?</p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="hapus-akun.php?id_user=<?= $akun['id_user'];?>" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>

<?php include 'layout/footer.php'; ?>

    