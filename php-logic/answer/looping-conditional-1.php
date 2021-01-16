<?php
$input = 5;

if($input % 2)
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
echo "Segitiga C,input = $input";
echo "<br>";
for($i=1; $i <= $input; $i++){
    for($j=$input; $j >= $i; $j--){
        echo " &nbsp";
    }
    for($k=1; $k <= $i; $k++){
        echo "*";
    }
    echo "<br> ";
}
?>