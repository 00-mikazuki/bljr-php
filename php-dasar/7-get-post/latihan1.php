<?php 
// Variable Scope / linkup variabel
// $x = 10;

// function tampilX() {
//   global $x;
//   echo $x;
// }

// tampilX();



// SUPERGLOBALS
// variable global milik PHP
// merupakan array associative
// echo $_SERVER["SERVER_NAME"];


// $_GET
$mangas = [
  [
    "judul" => "Shingeki no Kyojin",
    "tahun" => "2009",
    "author" => "Hajime Isayama",
    "status" => "Ended",
    "cover" => "snk.jpg"
  ],
  [
    "judul" => "Blue Lock",
    "tahun" => "2018",
    "author" => "Kaneshiro Muneyuki",
    "status" => "Ongoing",
    "cover" => "blue lock.jpg"
  ],
  [
    "judul" => "Chainsaw Man",
    "tahun" => "2018",
    "author" => "Fujimoto Tatsuki",
    "status" => "Ongoing",
    "cover" => "csm.jpg"
  ],
  [
    "judul" => "Black Clover",
    "tahun" => "2015",
    "author" => "Tabata Yuuki",
    "status" => "Ongoing",
    "cover" => "black clover.jpg"
  ],
  [
    "judul" => "Haikyuu",
    "tahun" => "2012",
    "author" => "Furudate Haruichi",
    "status" => "Ended",
    "cover" => "haikyuu.jpg"
  ],
  [
    "judul" => "Hunter x Hunter",
    "tahun" => "1998",
    "author" => "Togashi Yoishiro",
    "status" => "Ongoing",
    "cover" => "hxh.jpg"
  ],
  [
    "judul" => "Jujutsu Kaisen",
    "tahun" => "2018",
    "author" => "Gege Akutami",
    "status" => "Ongoing",
    "cover" => "jjk.jpg"
  ],
  [
    "judul" => "Kaijuu No. 8",
    "tahun" => "2020",
    "author" => "Matsumoto Naoya",
    "status" => "Ended",
    "cover" => "kaijuu.jpg"
  ],
  [
    "judul" => "My Hero Academia",
    "tahun" => "2014",
    "author" => "Horikoshi, Kouhei",
    "status" => "Ongoing",
    "cover" => "mha.jpg"
  ],
  [
    "judul" => "One Punch-Man",
    "tahun" => "2012",
    "author" => "Murata, Yusuke",
    "status" => "Ongoing",
    "cover" => "opm.jpg"
  ],

];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>
<body>
  <h1>Daftar Manga</h1>
  <ul>
    <?php foreach($mangas as $manga) : ?>
      <li>
        <a href="latihan2.php?judul=<?= $manga["judul"]; ?>&tahun=<?= $manga["tahun"] ?>&author=<?= $manga["author"] ?>&status=<?= $manga["status"] ?>&cover=<?= $manga["cover"] ?>"><?= $manga["judul"]; ?></a> 
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>