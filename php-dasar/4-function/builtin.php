<?php
// Date / Time

// date()
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time()
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("d M Y", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,7,6,2004));

// strtotime
// format tanggal -> detik
// echo date("l", strtotime("6 jul 2004"));


// String

// strlen()
// panjang dari sebuah string

// strcmp()
// membandingkan 2 buah string

// explode()
// memecah string menjadi array

// htmlspecialchars()
// function khusus untuk menjaga orang masuk ke website kita


// Utility

// var_dump()
// mencetak isi dan informasi dari variabel, array, object, dll

// isset()
// mengecek apakah sebuah variabel sudah pernah dibuat

// empty()
// mengecek apakah sebuah variabel kosong

// die()
// menghentikan program (baris bawahnya tidak akan dieksekusi)

// sleep()
// menghentikan program sementara


?>