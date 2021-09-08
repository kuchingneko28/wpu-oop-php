<?php

abstract class Produk {

    protected $nama;
    protected $expire;
    protected $harga;
    protected $diskon = 0;

    public function __construct($nama = "nama", $harga = "harga",$expire = "expire"){
       $this->nama = $nama;
       $this->harga = $harga;
       $this->expire = $expire;

    }

    public function setJudul($nama){
        $this->nama = $nama;

    }
    
    public function setHarga($harga){
        $this->nama = $harga;

    }
    public function setExpire($expire){
        $this->nama = $expire;

    }
    
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    
    public function getExpire(){
        return $this->expire;
    }
    public function getJudul(){
        return $this->nama;
    }

    public function getLabel(){
        return $this->nama;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    abstract public function getInfo();

}