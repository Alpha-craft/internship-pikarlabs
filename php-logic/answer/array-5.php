<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ],
  ];
$cariKey = 'nama';
$cariValue = 'fakhri';
$index = 0;

foreach($input as $value){
    // periksa isi array satu persatu menggunakan foreach
    if($value[$cariKey] == $cariValue){
        //periksa apakah $cariKey berisi $cariValue menggunakan if
        echo "index ke".$index;
        echo "<br>";
        echo "id = ".$value['id'].", ";
        echo "nama = ".$value['nama'];
    }
    
    $index++; // increment agar $index bertambah sesuai looping
}

?>