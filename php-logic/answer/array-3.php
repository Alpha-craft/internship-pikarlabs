<?php
$input = [1, 3, 2, 9, 4];
$cari = 3;

foreach($input as $key => $value){
    //periksa satu persatu value dari array terlebih dahulu
    // $key berisi index dan $varible $value berisi value array tersebut
    if ($cari == $value ){
        //cek menggunakan if apakah $cari sesuai dengan $cari jika sesuai maka echo indexnya yaitu $value
        echo "index ke $key";
        
    }
}

?>