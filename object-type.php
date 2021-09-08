<?php

// Jualan product
// Makanan kucing

class Produk {

    public $nama;
    public $harga;


    public function __construct($nama = "nama", $harga = "harga"){
       $this->nama = $nama;
       $this->harga = $harga;

    }

    public function getLabel(){
        return "$this->nama";
    }

}


class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->nama} | Rp. {$produk->harga}";

        return $str;
    }

}

// $produk1 = new Produk();
// $produk1->nama = "Whiskas";
// $produk1->anjay = "Tes";
// var_dump($produk1);



$produk = new Produk("Whiskas","29500");

echo "Produk makanan kucing : ". $produk->getLabel();
echo "<br>";
$infoProduk = new CetakInfoProduk();

echo $infoProduk->cetak($produk);