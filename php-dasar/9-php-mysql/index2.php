<?php
// koneksi ke database
// mysqli_connect("<nama host>", "<username mysql>", "<password>", "<nama database>");
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel manga / query data manga
// mysqli_query("<koneksi ke database>", "<query yang akan diambil>");
$result = mysqli_query($conn, "SELECT * FROM manga");
// var_dump($result);
// if( !$result ) {
//   echo mysqli_error($conn);
// }

// ambil data (fetch) manga dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // mengembalikan object

// while($manga = mysqli_fetch_assoc($result)) {
//   var_dump($manga);
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Daftar Manga</h1>

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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
      <td><?= $i ?></td>
      <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
      </td>
      <td><img src="img/<?= $row["cover"] ?>" alt="" width="70"></td>
      <td><?= $row["judul"] ?>n</td>
      <td><?= $row["author"] ?></td>
      <td><?= $row["tahun"] ?></td>
      <td><?= $row["status"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
  </table>

</body>
</html>