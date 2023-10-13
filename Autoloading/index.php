<?php

require "App/init.php";

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 32000, 200);
$produk2 = new Game("Counter Strike 2", "VALVE", "VALVE", 79000, 100);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

// $obj = new Produk();