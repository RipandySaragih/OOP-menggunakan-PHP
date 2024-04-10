<?php

define('NAMA', 'Ripandy Putra Juamanda Saragih');
echo NAMA;

echo "<br>";

const UMUR = 18;
echo UMUR;
echo "<hr>";

//class Coba {
//    const NAMA = 'Ripandy Putra Juamanda Saragih';
//}
//echo Coba::NAMA;

echo __LINE__;
echo "<hr>";

echo __FILE__;
echo "<hr>";

function coba() {
    return __FUNCTION__;
}
echo coba();
echo "<hr>";

class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
?>
