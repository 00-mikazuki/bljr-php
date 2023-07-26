<?php
// $mahasiswa = [
//   ["Juan Axl", "012012821", "Teknik Informatika", "juanaxl@trunojoyo.ac.id"],
//   ["Zaka Putra", "012028282", "Teknik Industri", "zakaputra@trunojoyo.ac.id"],
//   ["Erik", "001201201", "Teknik Planologi", "erik@gmail.com"]
// ];

// Array Associative
// definisinya seperti array numerik, tetapi
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
  [
    "nama" => "Juan Axl",
    "nrp" => "12122321",
    "email" => "juanaxl432@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "juan.jpg"
  ],
  [
    "nama" => "Zaka Putra",
    "nrp" => "8499383",
    "email" => "zakaputra432@gmail.com",
    "jurusan" => "Teknik Industri",
    "gambar" => "zaka.jpg"
  ],

];
// echo $mahasiswa[1]["tugas"][1];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    img {
      width: 100px;
    }
  </style>
</head>
<body>
  
<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>
  <ul>
    <li>
      <img src="img/<?= $mhs["gambar"] ?>" alt="">
    </li>
    <li>Nama : <?= $mhs["nama"] ?></li>
    <li>NRP : <?= $mhs["nrp"] ?></li>
    <li>Jurusan : <?= $mhs["jurusan"] ?></li>
    <li>Email : <?= $mhs["email"] ?></li>
  </ul>
<?php endforeach; ?>


</body>
</html>