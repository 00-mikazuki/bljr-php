<?php
// cek apakah tidak ada data di $_GET
// isset() untuk mencari tahu apakah sebuah variabel sudah pernah dibuat / belum
if( !isset($_GET["judul"]) || 
    !isset($_GET["cover"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["author"]) ||
    !isset($_GET["status"])) {
  // redirect
  header("Location: latihan1.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <ul>
    <li><img src="img/<?= $_GET["cover"] ?>" alt=""></li>
    <li><?= $_GET["judul"]; ?></li>
    <li><?= $_GET["tahun"]; ?></li>
    <li><?= $_GET["author"]; ?></li>
    <li><?= $_GET["status"]; ?></li>
  </ul>

  <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>