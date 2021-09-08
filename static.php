<?php 
// Contoh static
class ContohStatic {

    public static $angka = 1;

    public static function halo(){
        
        return "Halo" . self::$angka++ . "kali.";

    }


}

 echo ContohStatic::halo();
 echo ContohStatic::halo();
 echo ContohStatic::halo();

// class Contoh {
//     public $angka = 1;


//     public function halo(){
//         return "Halo". $this->angka. "kali";
//     }

// }


