<?php
// Materi 2
// Sintaks PHP

// Standard Output
// echo, print
// print_r (mencetak isi array)
// var_dump (menampilkan informasi dan isi variabel)
// echo 'Juan Axl';

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP (tidak disarankan)


// Variabel dan Tipe Data

// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Juan Axl";

// Konsep interpolasi (mengecek apakah dalam "" / string terdapat variabel atau tidak)
// echo "Halo, nama saya $nama";
// echo 'Halo, nama saya $nama';


// Operator

// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / Concatenation
// .
// $nama_depan = "Juan";
// $nama_belakang = "Axl";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Juan";
// $nama .= " ";
// $nama .= "Axl";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);





?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
  <p><?php echo "ini adalah paragraf" ?></p>

  <?php
    echo "<h1>Halo, Selamat Datang Juan</h1>";
  ?>

</body>
</html> -->