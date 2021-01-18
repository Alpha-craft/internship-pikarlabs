<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ],
  ];

  
function cariSiswa($cari){
    
    global $input;
    $nama = null;
    $id = null;
    $index = null;
    $cek = false;
    foreach($input as $i => $value){
        if ($value['id'] == $cari || $value['nama'] == $cari ){
            $nama = $value['nama'];
            $id = $value['id'];
            $index = $i;
            $cek = true;
        }
        
    }
    if( $cek == true ){
        echo "<br>";
        echo "cari siswa \"$cari\" ";
        echo "<br>";
        echo "<index ke $index>";
        echo "id = $id ,";
        echo "nama = $nama";
    }
    elseif($cek !== true){
        echo "<br>";
        echo "cari siswa \"$cari\" ";
        echo "<br>";
        echo "data tidak ditemukan";
    }
    // echo var_dump($nama);
    // echo var_dump($id);
    // echo var_dump($index);  
    // echo var_dump($cek);

}
cariSiswa(122);
cariSiswa('ivan');


?>