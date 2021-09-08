<?php

// Jualan product
// Makanan kucing

class Produk {

    public $nama = "whiskas";
    public $harga = 19500;


    public function getLabel(){
        return "$this->nama";
    }

}

// $produk1 = new Produk();
// $produk1->nama = "Whiskas";
// $produk1->anjay = "Tes";
// var_dump($produk1);



$produk3 = new Produk();
$produk3->nama = "Whiskas";
$produk3->harga = "19500";


echo "Produk makanan kucing : ". $produk3->getLabel();
echo "<br>";