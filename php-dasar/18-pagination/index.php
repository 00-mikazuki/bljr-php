<?php
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM manga"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);

$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$mangas = query("SELECT * FROM manga LIMIT $awalData, $jumlahDataPerhalaman");
// LIMIT <mulai dari data ke berapa (index dari 0)>, <berapa data yang ditampilkan>


// tombol cari diklik
if(isset($_POST["cari"])) {
  $_SESSION['mencari'] = $_POST["keyword"];
  // $halamanAktif = 1;
}

if($_SESSION['mencari'] != "") {
  $jumlahData = count(query(cari($_SESSION["mencari"])));
  $jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);

  $awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

  $mangas = query(cari($_SESSION["mencari"]) . " LIMIT $awalData, $jumlahDataPerhalaman");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>

  <a href="logout.php">Logout</a>

  <h1>Daftar Mahasiswa</h1>

  <a href="tambah.php">Tambah data manga</a>
  <br><br>

  <form action="?halaman=1" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br><br>

  <!-- navigasi -->

  <?php if($halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
  <?php endif; ?>

  <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanAktif) : ?>
      <a href="?halaman=<?= $i; ?>" style="font-weight: bold;"><?= $i; ?></a>
    <?php else : ?>
      <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
  <?php endfor; ?>

  <?php if($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
  <?php endif; ?>

  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Cover</th>
      <th>Judul</th>
      <th>Author</th>
      <th>Tahun</th>
      <th>Status</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mangas as $manga ) : ?>
    <tr>
      <td><?= $i ?></td>
      <td>
        <a href="ubah.php?id=<?= $manga["id"] ?>">ubah</a> |
        <a href="hapus.php?id=<?= $manga["id"] ?>" onclick="return confirm('yakin?')">hapus</a>
      </td>
      <td><img src="img/<?= $manga["cover"] ?>" alt="" width="70"></td>
      <td><?= $manga["judul"] ?></td>
      <td><?= $manga["author"] ?></td>
      <td><?= $manga["tahun"] ?></td>
      <td><?= $manga["status"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>

</body>
</html>