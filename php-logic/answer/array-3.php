<?php
$input = [1, 3, 2, 9, 4];
$cari = 2;

foreach($input as $value){
    //periksa satu persatu value dari array terlebih dahulu
    if ($value == $cari){
        //cek menggunakan if
        echo "index ke $value";
    }
}

?>