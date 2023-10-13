<?php

interface infoProduk{
    public function getInfoLengkap();
}

abstract class Produk{
    private $judul, 
            $penulis, 
            $penerbit;
    protected $diskon = 0;
    
    private $harga;

    public function getLabel(){
        return "$this->penerbit, $this->penulis";
    }
    
    abstract public function getInfo();

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

class Komik extends Produk implements infoProduk{
    
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

class Game extends Produk implements infoProduk{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) // Default tetap boleh diisi asal jangan diulangi ke dalam parent __constructnya
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()}, {$this->harga}";
        return $str;
    }

    public function getInfoLengkap()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

}

class CetakInfoProduk{

    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "Daftar Produk : <br>";
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoLengkap()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 32000, 200);
// $produk2 = new Game("Counter Strike 2", "VALVE", "VALVE", 79000, 100);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

// $obj = new Produk();