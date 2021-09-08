 <?php

// Jualan product
// Makanan kucing

interface InfoProduk{
  public function getInfoProduk();

}

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

class CetakInfoProduk {

    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }


    public function cetak(){
        $str = "Daftar Produk : <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()}";
        }

        return $str;
    }


}


// $produk1 = new Produk();
// $produk1->nama = "Whiskas";
// $produk1->anjay = "Tes";
// var_dump($produk1);



$produk = new Kucing("Whiskas",29500,2020,"Makanan kucing");


$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk);


echo $cetakProduk->cetak();
