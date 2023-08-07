<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// function mengambil data dari tabel di database
function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data) {
  global $conn;
  // ambil data dari tiap elemen dalam form
  $judul = htmlspecialchars($data["judul"]);
  $author = htmlspecialchars($data["author"]);
  $tahun = htmlspecialchars($data["tahun"]);
  $status = htmlspecialchars($data["status"]);
  $cover = htmlspecialchars($data["cover"]);

  // query insert data
  $query = "INSERT INTO manga
            VALUES
            ('', '$judul', '$author', '$tahun', '$status', '$cover')
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM manga WHERE id = $id");

  return mysqli_affected_rows($conn);
}


?>