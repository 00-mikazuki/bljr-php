<?php
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$mangas = query("SELECT * FROM manga");
// $mangas = query("SELECT * FROM manga WHERE judul = 'Chainsaw Man'");
// tampilkan manga yang memiliki judul 'Chainsaw Man'
// $mangas = query("SELECT * FROM manga ORDER BY id DESC");
// urutkan berdasarkan id secara descending

// tombol cari diklik
if(isset($_POST["cari"])) {
  $mangas = cari($_POST["keyword"]);
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

  <form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
  </form>

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