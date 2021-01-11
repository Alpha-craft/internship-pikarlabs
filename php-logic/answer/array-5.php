<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ],
  ];
// $cariKey = 'nama';
// $cariValue = 'fakhri';
function cariObject($cariKey,$cariValue){
    global $input;
    $cek = false;
    $nama = null;
    $id = null;
    foreach($input as $index => $value){
        // periksa isi array satu persatu menggunakan foreach
        if($value[$cariKey] == $cariValue){
            $cek = true;
            $nama = $value['nama'];
            $id = $value['id'];
            //timpa variabel $nama dan $id
        }
        
    }
    if($cek == true){
        echo "cari object \" $cariKey : $cariValue \" ";
        echo "<br>";
        echo "index ke $index";
        echo "id = $id, nama = $nama";
    }
    else{
        echo "cari object \" $cariKey : $cariValue \" ";
        echo "<br>";
        echo "data tidak ditemukan";
    }
}
cariObject('nama','fakhri');
echo "<br>";
echo "<br>";
cariObject('nama','rahman');

?>