<?php

class Buku{
    public $judul;

    public function __construct($judul = "Naruto")
    {
        $this->judul = $judul;
    }

    public function cetakString(){
        $str = "{$this->judul}";
        return $str;
    }
}

$buku1 = new Buku();
echo $buku1->cetakString();

?>