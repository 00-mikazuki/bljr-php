<?php
require 'functions.php';

// ambil data dari URL
$id = $_GET["id"];

// query data manga berdasarkan id
$manga = query("SELECT * FROM manga WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
  // cek apakah data berhasil diubah atau tidak
  if(ubah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  }
  

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Manga</title>
</head>
<body>
  <h1>Ubah Data Manga</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $manga["id"]; ?>">
    <input type="hidden" name="coverLama" value="<?= $manga["cover"]; ?>">
    <ul>
      <li>
        <label for="judul">Judul :</label>
        <input type="text" name="judul" id="judul" required value="<?= $manga["judul"]; ?>">
      </li>
      <li>
        <label for="author">Author :</label>
        <input type="text" name="author" id="author" required value="<?= $manga["author"]; ?>">
      </li>
      <li>
        <label for="tahun">Tahun :</label>
        <input type="text" name="tahun" id="tahun" required value="<?= $manga["tahun"]; ?>">
      </li>
      <li>
        <label for="status">Status :</label>
        <input type="text" name="status" id="status" required value="<?= $manga["status"]; ?>">
      </li>
      <li>
        <label for="cover">Cover :</label><br>
        <img src="img/<?= $manga["cover"] ?>" alt="" width="70"><br>
        <input type="file" name="cover" id="cover">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>
    </ul>
  </form>

</body>
</html>