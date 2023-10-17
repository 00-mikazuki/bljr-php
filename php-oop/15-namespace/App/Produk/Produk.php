<?php 
// abstract class
abstract class Produk {
  // property
  protected $judul,
          $penulis,
          $penerbit,
          $harga,
          $diskon = 0;

  // constructor
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // method
  // setter
  public function setJudul($judul) {
    $this->judul = $judul;
  }

  public function setPenulis($penulis) {
    $this->penulis = $penulis;
  }
  
  public function setPenerbit($penerbit) {
    $this->penerbit = $penerbit;
  }
  
  public function setHarga($harga) {
    $this->harga = $harga;
  }

  public function setDiskon($diskon) {
    $this->diskon = $diskon;
  }

  // getter
  public function getJudul() {
    return $this->judul;
  }

  public function getPenulis() {
    return $this->penulis;
  }
  
  public function getPenerbit() {
    return $this->penerbit;
  }

  public function getDiskon() {
    return $this->diskon;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getHarga() {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
  
  // abstract method
  abstract public function getInfo();

}
