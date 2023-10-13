<?php

//Jualan Produk
//KOMIK
//GAME
class Produk{
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga;

    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;   
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1->judul);

// $produk2 = new Produk();
// $produk2->judul = "Moba Gendengs";
// $produk2->propertyBaru = "apakah ada?";
// var_dump($produk2);

$produk3 = new Produk("Mobile Legends: Bang Bang", "Xi Cheung Fang", "Moonton", 32000); // Membuat Produk Baru
// $produk3->judul = "";
// $produk3->penulis = "";
// $produk3->penerbit = "";
// $produk3->harga = 32000;

echo "Game : $produk3->judul, Rp. $produk3->harga"; // Mengeluarkan output dari property yang sudah ditimpa
echo "<br>"; // ini mah gausah dibahas lha ya
echo "Game : " . $produk3->getLabel(); // Mengeluarkan output sebuah method dari objek yang baru dibuat yang dimana method tersebut mengembalikan sebuah nilai property yang sudah di buat sebelumnya dan di print melalui perintah echo