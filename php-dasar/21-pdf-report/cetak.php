<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$mangas = query("SELECT * FROM manga");

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Manga</title>
  <link rel="stylesheet" href="css/print.css">
</head>
<body>
  <h1>Daftar Manga</h1>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Cover</th>
      <th>Judul</th>
      <th>Author</th>
      <th>Tahun</th>
      <th>Status</th>
    </tr>
';

$i = 1;
foreach($mangas as $manga) {
  $html .= '
    <tr>
      <td>'.$i++.'</td>
      <td><img src="img/'.$manga["cover"].'" width="50"></td>
      <td>'.$manga["judul"].'</td>
      <td>'.$manga["author"].'</td>
      <td>'.$manga["tahun"].'</td>
      <td>'.$manga["status"].'</td>
    </tr>
  ';
}

$html .= '
  </table>
</body>
</html>
';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-manga.pdf', 'I');

?>

