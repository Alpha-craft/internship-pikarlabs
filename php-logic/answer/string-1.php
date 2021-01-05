<?php
$input = "smkn 2 surabaya";
for($i = strlen($input) - 1 ; $i >= 0 ;$i--){
    // panjang string dikurangi 1 agar tidak terjadi error stringg offset karena index dimulai dari 0
    // mengukur panjang string menggunakan strlen()
    // melakukan decrement pada varibel yang menyimpan panjang string sehingga membuatnya terbalik
    // akses index string menggunakan panjang string yang sudah di decrement tadi jadi
    echo $input[$i]; 
    //untuk mengecek panjang array
    // echo $i;
    // echo "<br>";
}
?>