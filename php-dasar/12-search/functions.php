<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// function mengambil data dari tabel di database
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

// function menambahkan data ke tabel manga dalam database
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
            // value diurutkan sesuai field dalam tabel
  mysqli_query($conn, $query);

  // mengembalikan nilai dari jumlah baris yang berubah pada tabel
  return mysqli_affected_rows($conn);
}


// function menghapus data di tabel manga dalam database
function hapus($id) {
  global $conn;
  // menghapus data berdasarkan id
  mysqli_query($conn, "DELETE FROM manga WHERE id = $id");
  
  // mengembalikan nilai dari jumlah baris yang berubah pada tabel
  return mysqli_affected_rows($conn);
}


// function ubah data di tabel manga dalam database
function ubah($data) {
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $judul = htmlspecialchars($data["judul"]);
  $author = htmlspecialchars($data["author"]);
  $tahun = htmlspecialchars($data["tahun"]);
  $status = htmlspecialchars($data["status"]);
  $cover = htmlspecialchars($data["cover"]);

  // query insert data
  $query = "UPDATE manga SET
              judul = '$judul',
              author = '$author',
              tahun = '$tahun',
              status = '$status',
              cover = '$cover'
            WHERE id = $id
          ";
          // value diurutkan sesuai field dalam tabel
  mysqli_query($conn, $query);

  // mengembalikan nilai dari jumlah baris yang berubah pada tabel
  return mysqli_affected_rows($conn);
}


// function cari data pada tabel manga dalam database
function cari($keyword) {
  $query = "SELECT * FROM manga
              WHERE
            judul LIKE '%$keyword%' OR
            author LIKE '%$keyword%' OR
            tahun LIKE '%$keyword%' OR
            status LIKE '%$keyword%'
          ";
        // mencari data manga meskipun keyword tidak lengkap dari depan / belakang
  return query($query);
}

?>