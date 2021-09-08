<?php

class Kucing extends Produk implements InfoProduk {

    public $tipe;

    public function __construct($nama = "nama", $harga = "harga",$expire = "expire",$tipe ="tipe")
    {
        parent::__construct($nama, $harga , $expire, $tipe);
        
        $this->tipe = $tipe;
    }

    public function getInfo()
    {
        $str = " {$this->tipe} : {$this->getLabel()} | Expire : {$this->expire} | (Rp. {$this->harga})";
        
        if($this->expire <= 2019){
        $str = " {$this->tipe} : {$this->getLabel()} | (Sudah Kadaluarsa !)";

        }

        return $str;
    }


    public function getInfoProduk(){
    $str = $this->getInfo();
 
    return $str;
    }
    
}