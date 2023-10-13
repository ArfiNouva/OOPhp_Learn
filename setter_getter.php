<?php

//Jualan Produk
//KOMIK
//GAME


class Produk{
    private $judul, 
            $penulis, 
            $penerbit;
    protected $diskon = 0;
    
    private $harga;

    public function getLabel(){
        return "$this->penerbit, $this->penulis";
    }

    public function getInfoLengkap(){
        $str = "{$this->judul} | {$this->getLabel()}, {$this->harga}";
        return $str;
    }

    public function setJudul($judul){
        if (!is_string($judul)){
            throw new Exception("Harus String Lur...", 404);
        }
        $this->judul = $judul;
    }
    
    public function getJudul(){
        return $this->judul;
    }
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

}

class Komik extends Produk{
    
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) // __construct Komik bisa diisi defaultnya apa kecuali construct didalam parent
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoLengkap()
    {
        $str = "Komik : " . parent::getInfoLengkap() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) // Default tetap boleh diisi asal jangan diulangi ke dalam parent __constructnya
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoLengkap()
    {
        $str = "Game : " . parent::getInfoLengkap() . " - {$this->waktuMain} Jam.";
        return $str;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk2 = new Game("Counter Strike 2", "VALVE", "VALVE", 79000, 100);
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 32000, 200);
$produk3 = new Produk("Hai");

$infoProduk1 = new CetakInfoProduk();
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("Mimimo");
echo $produk1->getJudul();
echo $produk2->getJudul();

// Outputnya : Komik : Naruto | Shonen Jump, Masashi Kishimoto, (Rp. 32000)

