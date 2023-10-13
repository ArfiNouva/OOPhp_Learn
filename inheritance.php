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
           $waktuMain,
           $tipe;

    public function getLabel(){
        return "$this->penerbit, $this->penulis";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, {$this->harga}";
        if ($this->tipe == "Komik"){
            $str .= "- {$this->jmlHalaman} Halaman."; 
        } else if ($this->tipe == "Game"){
            $str .= "~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk2 = new Produk("Counter Strike 2", "VALVE", "VALVE", 79000, 0, 100, "Game");
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 32000, 100, 0, "Komik");

$infoProduk1 = new CetakInfoProduk();
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

// Outputnya : Komik : Naruto | Shonen Jump, Masashi Kishimoto, (Rp. 32000)

