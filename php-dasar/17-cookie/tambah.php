<?php
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if(tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
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
  <h1>Tambah Data Manga</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="judul">Judul :</label>
        <input type="text" name="judul" id="judul" required>
      </li>
      <li>
        <label for="author">Author :</label>
        <input type="text" name="author" id="author" required>
      </li>
      <li>
        <label for="tahun">Tahun :</label>
        <input type="text" name="tahun" id="tahun" required>
      </li>
      <li>
        <label for="status">Status :</label>
        <input type="text" name="status" id="status" required>
      </li>
      <li>
        <label for="cover">Cover :</label>
        <input type="file" name="cover" id="cover">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>
  </form>

</body>
</html>