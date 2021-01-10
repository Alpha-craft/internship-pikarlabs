<?php
$input = [1, 3, 2, 9, 4];
$cari = 3;

foreach($input as $key => $value){
    //periksa satu persatu value dari array terlebih dahulu
    // $key berisi index dan  $value berisi value array tersebut
    if ($cari == $value ){
        //cek menggunakan if apakah $cari ada dalam $value jika sesuai maka echo indexnya yaitu $key
        echo "index ke $key";
        
    }
}

?>