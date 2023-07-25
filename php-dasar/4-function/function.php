<?php
function salam($waktu = "Datang", $nama = "Admin") {
  // nilai parameter default, jika saat dipanggil tidak menggunakan parameter / kurang
  return "Selamat $waktu, $nama!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan Function</title>
</head>
<body>
  <h1><?= salam("Pagi", "Juan"); ?></h1>
</body>
</html>