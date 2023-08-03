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
        <a href="">ubah</a> |
        <a href="">hapus</a>
      </td>
      <td><img src="img/<?= $manga["cover"] ?>" alt="" width="70"></td>
      <td><?= $manga["judul"] ?>n</td>
      <td><?= $manga["author"] ?></td>
      <td><?= $manga["tahun"] ?></td>
      <td><?= $manga["status"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>

</body>
</html>