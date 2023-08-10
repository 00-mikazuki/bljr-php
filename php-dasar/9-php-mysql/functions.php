<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
  global $conn;
  // mengambil tabel manga dari database phpdasar
  $result = mysqli_query($conn, $query);
  $rows = [];
  // mengambil setiap row pada tabel manga dan ditampung dalam variabel debagai array associative
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
?>