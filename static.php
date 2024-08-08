<?php

class Mahasiswa {
    public static $nama = "Mochamad Arfi Nouvama";

    public static function halo(){
        return "Halo" . self::$nama . "Kamu manusia bukan?";
        
    }
}

echo Mahasiswa::halo();