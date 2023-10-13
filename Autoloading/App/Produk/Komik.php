<?php
class Komik extends Produk implements InfoProduk{
    
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) // __construct Komik bisa diisi defaultnya apa kecuali construct didalam parent
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()}, {$this->harga}";
        return $str;
    }

    public function getInfoLengkap()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}