<?php
require_once "./App/Init.php";

$produk = new Kucing("Whiskas",29500,2020,"Makanan kucing");


$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk);


echo $cetakProduk->cetak();

new Coba();