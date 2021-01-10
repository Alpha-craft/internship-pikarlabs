<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ],
  ];

  
function cariSiswa($cari){
    $index = 0;
    global $input;
    foreach($input as $value){

        if ($value['id'] == $cari || $value['nama'] == $cari ){
            //cek apakah $cari berada dalam $value['nama] atau $value['id']
            echo "index ke ".$index;
            echo "<br>";
            echo "id = ". $value['id'].", ";
            echo "nama = ". $value['nama'];
            break;
        }
        elseif($value['id'] !== $cari || $value['nama'] !== $cari ){
            //jika $value['id] atau $value['nama'] tidak sama dengan $ cari 
            echo "<br>";
            echo "maaf data $cari tidak ditemukan";
            break;
        }
        $index++; // increment agar index dapat bertambah sesuai loop
    }
}
cariSiswa(122);
cariSiswa('ivan');

?>