<?php
$input = 5;

echo "Segitiga A , input=$input ";
echo "<br>";
for($i = 1;$i <= $input; $i++){
    for($j = $i ; $j > 0;$j--){
        echo "*";
    }
    echo "<br>";
}
echo "Segitiga B , input=$input ";
echo "<br>";
for($i = 1;$i <=$input;$i++){
    for($j = $input; $j>=$i ;$j-- ){
        echo "*";
    }
    echo "<br>";
}
?>