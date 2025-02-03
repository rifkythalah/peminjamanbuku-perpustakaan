<?php

// fungsi menampilkan
function select($query)
{
  // panggil koneksi database
  global $db;

  $result = mysqli_query($db, $query);
  $rows =[];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;

}

// fungsi menambahkan data buku
function create_buku($post)
{
  global $db;

  $id_buku = strip_tags($post['id_buku']);
  $judul_buku   = strip_tags($post['judul_buku']);
  $pengarang = strip_tags($post['pengarang']);
  $penerbit  = strip_tags($post['penerbit']);
  $tahun_terbit  = strip_tags($post['tahun_terbit']);
  $stok_buku  = strip_tags($post['stok_buku']);

  // query tambah data
  $query = "INSERT INTO buku VALUES('$id_buku', '$judul_buku', '$pengarang', '$penerbit', '$tahun_terbit', '$stok_buku')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// fungsi mengubah data buku
function update_buku($post)
{
  global $db;

  $id_buku  = $post['id_buku'];
  $judul_buku       = strip_tags($post['judul_buku']);
  $pengarang   = strip_tags($post['pengarang']);
  $penerbit      = strip_tags($post['penerbit']);
  $tahun_terbit   = strip_tags($post['tahun_terbit']);
  $stok_buku  = strip_tags($post['stok_buku']);

  // query ubah data
  $query = "UPDATE buku SET judul_buku='$judul_buku', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit', stok_buku='$stok_buku' WHERE id_buku = $id_buku";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// fungsi menghapus data buku
function delete_buku($id_buku)
{
  global $db;


  // query hapus data buku
  $query = "DELETE FROM buku WHERE id_buku = $id_buku";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

//fungsi menambahkan data siswa
function create_siswa($post)
{
  global $db;

  $nama     = strip_tags($post['nama']);
  $kelas    = strip_tags($post['kelas']);
  $jurusan  = strip_tags($post['jurusan']);
  

  // query tambah data
  $query = "INSERT INTO siswa VALUES(null, '$nama', '$kelas', '$jurusan')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// // fungsi mengubah data siswa
function update_siswa($post)
{
  global $db;

  $nis = strip_tags($post['nis']);
  $nama     = strip_tags($post['nama']);
  $kelas    = strip_tags($post['kelas']);
  $jurusan       = strip_tags($post['jurusan']);

//   // query ubah data
$query = "UPDATE siswa SET nama ='$nama', kelas ='$kelas', jurusan ='$jurusan' WHERE nis = $nis ";

mysqli_query($db, $query);

return mysqli_affected_rows($db);
}


// fungsi menghapus data siswa
function delete_siswa($nis)
{
  global $db;


  // query hapus data siswa
  $query = "DELETE FROM siswa WHERE nis = $nis";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}


// fungsi tambah akun
function create_akun($post)
{
  global $db;

  $nama       = strip_tags($post['nama']);
  $username   = strip_tags($post['username']);
  $password   = md5(strip_tags($post['password']));
  $level      = strip_tags($post['level']);


  // query tambah data
  $query = "INSERT INTO akun VALUES(null, '$nama', '$username', '$password', '$level')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// fungsi ubah akun
function update_akun($post)
{
  global $db;

  $id_user    = strip_tags($post['id_user']);
  $nama       = strip_tags($post['nama']);
  $username   = strip_tags($post['username']);
  $password   = md5(strip_tags($post['password']));
  $level      = strip_tags($post['level']);


  // query ubah data
  $query = "UPDATE akun SET nama = '$nama', username = '$username',
  password = '$password', level = '$level' WHERE id_user = $id_user";
  
  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// fungsi menghapus data akun
function delete_akun($id_user)
{
  global $db;

  // query hapus data akun
  $query = "DELETE FROM akun WHERE id_user = $id_user";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

//fungsi menambahkan data petugas
function create_petugas($post)
{
  global $db;

  $id_petugas     = strip_tags($post['id_petugas']);
  $nama_petugas     = strip_tags($post['nama_petugas']);
  $jabatan       = strip_tags($post['jabatan']);
  

  // query tambah data
  $query = "INSERT INTO petugas VALUES('$id_petugas', '$nama_petugas', '$jabatan')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// // fungsi mengubah data petugas
function update_petugas($post)
{
  global $db;

  $id_petugas     = strip_tags($post['id_petugas']);
  $nama_petugas    = strip_tags($post['nama_petugas']);
  $jabatan       = strip_tags($post['jabatan']);

//   // query ubah data
$query = "UPDATE petugas SET id_petugas ='$id_petugas', nama_petugas ='$nama_petugas', jabatan ='$jabatan' WHERE id_petugas = $id_petugas ";

mysqli_query($db, $query);

return mysqli_affected_rows($db);
}


// fungsi menghapus data siswa
function delete_petugas($id_petugas)
{
  global $db;


  // query hapus data siswa
  $query = "DELETE FROM petugas WHERE id_petugas = $id_petugas";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// fungsi menambahkan data peminjaman
function create_peminjaman($post)
{
  global $db;

  $id_siswa = strip_tags($post['id_siswa']);
  $id_buku = strip_tags($post['id_buku']);
  $id_petugas = strip_tags($post['id_petugas']);
  $tgl_pinjam = strip_tags($post['tgl_pinjam']);
  $tgl_kembali = strip_tags($post['tgl_kembali']);
  $status = 'Dipinjam'; // Default value

  // query tambah data
  $query = "INSERT INTO peminjaman VALUES(NULL, '$id_siswa', '$id_buku', '$id_petugas', '$tgl_pinjam', '$tgl_kembali', '$status')";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}

// Fungsi untuk mengubah data peminjaman
function update_peminjaman($post) {
  global $db;

  $id_peminjaman = $post['id_peminjaman'];
  $id_siswa = strip_tags($post['id_siswa']);
  $id_buku = strip_tags($post['id_buku']);
  $id_petugas = strip_tags($post['id_petugas']);
  $tgl_pinjam = strip_tags($post['tgl_pinjam']);
  $tgl_kembali = strip_tags($post['tgl_kembali']);
  $status = strip_tags($post['status']);

  // Query ubah data
  $query = "UPDATE peminjaman SET 
            id_siswa='$id_siswa', 
            id_buku='$id_buku', 
            id_petugas='$id_petugas', 
            tgl_pinjam='$tgl_pinjam', 
            tgl_kembali='$tgl_kembali', 
            status='$status' 
            WHERE id_peminjaman = $id_peminjaman";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}
// fungsi menghapus data peminjaman
function delete_peminjaman($id_peminjaman)
{
  global $db;


  // query hapus data $id_peminjaman
  $query = "DELETE FROM peminjaman WHERE id_peminjaman = $id_peminjaman";

  mysqli_query($db, $query);

  return mysqli_affected_rows($db);
}