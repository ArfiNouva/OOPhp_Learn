<?php

//Jualan Produk
//KOMIK
//GAME
class Produk{
    public $judul;

    public function getLabel(){
        return "$this->penerbit, $this->penulis";
    }
    
    public function __construct($judul = "judul")
    {
        $this->judul = $judul;
    }

}

class Buku {
    public $judul;

    public function __construct($judul = "Judul")
    {
        $this->judul = $judul;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){ //Tambahin Class mana yang mau diambil didalem parameternya
        $str = "{$produk->judul}";
        return $str;
    }
}

$produk1 = new Produk();
$produk2 = new Buku();

$infoProduk1 = new CetakInfoProduk();
echo "Komik Naruto : " . $infoProduk1->cetak($produk1);
echo "<br>";
echo "Komik Naruto : " . $infoProduk1->cetak($produk2);