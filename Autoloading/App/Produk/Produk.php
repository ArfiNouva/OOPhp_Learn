<?php
abstract class Produk{
    protected $judul, 
            $penulis, 
            $penerbit;
    protected $diskon = 0;
    
    protected $harga;

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