<?php
$input = [1, 3, 2, 9, 4];
$cari = 2;

function cariIndex($cari){
    global $input;
    $nilaiArray = null;
    $index = null;
    $cek = false;
    foreach($input as $key => $value){
        //periksa satu persatu value dari array terlebih dahulu
        // $key berisi index dan  $value berisi value array tersebut
        if ($cari == $value ){
            //cek menggunakan if apakah $cari ada dalam $value jika sesuai maka echo indexnya yaitu $key
            $nilaiArray = $value;
            $index = $key;
            $cek = true;
        }
    }
    if($cek == true){
        echo "index ke $index";
    }
    else{
        echo "object \"$cari\" tidak ditemukan";
    }
}
cariIndex($cari);


?>
