<?php
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