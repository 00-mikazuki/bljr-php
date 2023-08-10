<?php
require 'functions.php';
$mangas = query("SELECT * FROM manga");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <a href="tambah.php">Tambah data manga</a>
  <br><br>

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