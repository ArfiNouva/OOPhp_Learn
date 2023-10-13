<?php

//Jualan Produk
//KOMIK
//GAME


class Produk{
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga,
           $jmlHalaman,
           $waktuMain;

    public function getLabel(){
        return "$this->penerbit, $this->penulis";
    }

    public function getInfoLengkap(){
        $str = "Produk: {$this->judul} | {$this->getLabel()}, {$this->harga}";
        return $str;
    }
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

    }

}

class Komik extends Produk{
    
    public function getInfoLengkap()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()}, {$this->harga} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{

    public function getInfoLengkap()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()}, {$this->harga} ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk2 = new Game("Counter Strike 2", "VALVE", "VALVE", 79000, 0, 100);
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 32000, 200);
$produk3 = new Produk("Sapidermen", "Gatau", "Sony Pictures", 0, 0, 100);

$infoProduk1 = new CetakInfoProduk();
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
// echo $produk3->getInfoLengkap();
// echo "<br>";
echo $infoProduk1->cetak($produk3);

// Outputnya : Komik : Naruto | Shonen Jump, Masashi Kishimoto, (Rp. 32000)

