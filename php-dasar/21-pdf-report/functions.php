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

  // upload gambar
  $cover = upload();
  if(!$cover) {
    return false;
  }

  // query insert data
  $query = "INSERT INTO manga
            VALUES
            ('', '$judul', '$author', '$tahun', '$status', '$cover')
            ";
            // value diurutkan sesuai field dalam tabel
            // varchar menggunakan kutip pada variabel
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

// function upload cover
function upload() {
  $namaFile = $_FILES['cover']['name'];
  $ukuranFile = $_FILES['cover']['size'];
  $error = $_FILES['cover']['error'];
  $tmpName = $_FILES['cover']['tmp_name'];

  // cek apakah tidak ada gambar yg diupload
  if($error === 4) {
    echo "
      <script>
        alert('pilih gambar terlebih dahulu!');
      </script>
    ";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if(!in_array($ekstensiGambar, $ekstensiGambarvalid)) {
    echo "
      <script>
        alert('yang anda upload bukan gambar!');
      </script>
    ";
    return false;
  }

  // cek jika ukuran terlalu besar (>1MB)
  if($ukuranFile > 1000000) {
    echo "
      <script>
        alert('ukuran gambar terlalu besar!');
      </script>
    ";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.' . $ekstensiGambar;
  // $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru );

  return $namaFileBaru;
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
  $coverLama = htmlspecialchars($data["coverLama"]);

  // cek apakah user pilih gambar baru atau tidak
  if($_FILES['cover']['error'] === 4) {
    $cover = $coverLama;
  } else {
    $cover = upload();
  }


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


// funtion registrasi
function registrasi($data) {
  global $conn;

  // stripslashes(string) : membersihkan karakter backslash pada string
  $username = strtolower(stripslashes($data["username"]));

  // mysqli_real_escape_string($mysqli, string) : memungkinkan password memiliki tanda kutip dan akan dimasukkan ke dalam database secara aman
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada dalam database atau belum
  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)) {
    echo "
      <script>
        alert('username sudah ada');
      </script>
    ";
    return false;
  }

  // cek konfirmasi password
  if($password !== $password2) {
    echo "
      <script>
        alert('konfirmasi password tidak sesuai');
      </script>
    ";
    return false;
  }

  // enkripsi password
  // password_hash(<password mana yang akan diacak>, <algoritma hash apa yang akan dipakai>)
  $password = password_hash($password, PASSWORD_DEFAULT);
  // $password = md5($password); // tidak disarankan karena enkripsi mudah dibongkar

  // tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");
  

  return mysqli_affected_rows($conn);
}

?>