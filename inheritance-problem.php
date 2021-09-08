 <?php

// Jualan product
// Makanan kucing

class Produk {

    public $nama;
    public $harga;
    public $tipe;
    public $expire;

    public function __construct($nama = "nama", $harga = "harga",$expire = "expire", $tipe = "tipe"){
       $this->nama = $nama;
       $this->harga = $harga;
       $this->expire = $expire;
       $this->tipe = $tipe;


    }

    public function getLabel(){
        return "$this->nama";
    }


    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->getLabel()} | Expire : {$this->expire} | (Rp. {$this->harga})";
        
        if($this->expire <= 2019){
        $str = "{$this->tipe} : {$this->getLabel()} | (Sudah Kadaluarsa !)";

        }

        return $str;
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



$produk = new Produk("Whiskas",29500,2021,"Makanan kucing");

echo $produk->getInfoLengkap();