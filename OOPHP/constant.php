<?php

// define('Nama', 'Muhammad Daffa Riyadi');
// echo NAMA;

// echo "<br>";

// const Umur = 21;
// echo Umur;

// class Coba {
//   const Nama = 'Daffa RB';
// }

// echo Coba::Nama;

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;

echo '<hr>';
echo __LINE__;
echo '<hr>';
echo __FILE__;
echo '<hr>';
echo __DIR__;
echo '<hr>';
echo __FUNCTION__;
echo '<hr>';
echo __CLASS__;

?>