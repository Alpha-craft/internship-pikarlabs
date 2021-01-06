<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ],
  ];
  $cari = '122';
  
$index = 0; 
foreach($input as $value){

    if ($value['id'] == $cari || $value['nama'] == $cari){
        //cek apakah $cari berada dalam $value['nama] atau $value['id']
        echo "index ke ".$index;
        echo "<br>";
        echo "id = ". $value['id'].", ";
        echo "nama = ". $value['nama'];
    }
    $index++; // increment agar index dapat bertambah sesuai loop
}
  
?>