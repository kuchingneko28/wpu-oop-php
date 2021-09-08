<?php

// define("NAMA","Kuching");


// echo NAMA;


// const neko = "Neko";

// echo neko;



// class Coba {
//     const Nama = "Kuching";
// }

// echo Coba::Nama;


// echo __FILE__;



// function coba(){

//     return __FUNCTION__;
// }

// echo coba();


class Coba {
    public $kelas =__CLASS__;


}

$obj =  new Coba();
echo $obj->kelas;