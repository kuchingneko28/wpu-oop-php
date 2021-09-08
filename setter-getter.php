 <?php

// Jualan product
// Makanan kucing

class Produk {

    private $nama;
    private $expire;
    private $harga;
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

    public function getInfoProduk(){
        $str = " {$this->tipe} : {$this->getLabel()} | Expire : {$this->expire} | (Rp. {$this->harga})";
        
        if($this->expire <= 2019){
        $str = " {$this->tipe} : {$this->getLabel()} | (Sudah Kadaluarsa !)";

        }

        return $str;
    }

}

class Kucing extends Produk {

    public $tipe;

    public function __construct($nama = "nama", $harga = "harga",$expire = "expire",$tipe ="tipe")
    {
        parent::__construct($nama, $harga , $expire, $tipe);
        
        $this->tipe = $tipe;
    }


    public function getInfoProduk(){
    $str = parent::getInfoProduk();
 
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



$produk = new Kucing("Whiskas",29500,2020,"Makanan kucing");
$produk2 = new Produk("Tes");
$produk->setDiskon(50);

echo $produk->getJudul();
echo $produk->getExpire();
echo $produk->getHarga();
