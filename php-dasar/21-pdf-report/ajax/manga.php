<?php 
sleep(1);
require '../functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM manga
          WHERE
          judul LIKE '%$keyword%' OR
          author LIKE '%$keyword%' OR
          tahun LIKE '%$keyword%' OR
          status LIKE '%$keyword%'
        ";
$mangas = query($query);


?>

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