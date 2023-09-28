<?php 

// // define() tidak bisa disimpan ke dalam sebuah class, disimpan diluar sbg constanta global
// define('NAMA', 'Juan');
// echo NAMA;

// echo "<br>";

// // const dapat dimasukkan ke dalam class
// const UMUR = 19;
// echo UMUR;

// class Coba {
//   const NAMA = 'Juan';
  
// }

// echo Coba::NAMA;


// magic constant

// echo __LINE__;

// function coba() {
//   return __FUNCTION__;
// }

// echo coba();

class Coba {
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>