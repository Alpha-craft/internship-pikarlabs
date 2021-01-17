<?php
$input = 5;

if(($input % 2) == 0){
    echo "$input bukan bilangan ganjil harap masukan bilangan ganjil";
}
else{

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

    echo "Segitiga D,input = $input";
    echo "<br>";
    for($i=1; $i <= $input; $i++){
        for($j=1; $j <= $i; $j++){
            echo " &nbsp";
        }
        for($j=$input; $j >= $i; $j--){
            echo "*";
        }
        echo "<br> ";
    }
    echo "Segitiga E,input = $input";
    echo "<br>";
    for($i=1; $i <= $input; $i++){
        for($j=1; $j <= $i%2; $j++){
            for($k=0; $k <= $i; $k++){
                echo " &nbsp";
            }
            for($l=$input; $l >= $i; $l--){
                echo "*";
                echo "&nbsp ";
            }
        echo "<br>";
        }
    }


    echo "Segitiga F,input = $input";
    echo "<br>";
    for( $a=$input; $a>0; $a--){
        for($i=1; $i<=$a; $i++){
            echo "&nbsp";
        }for($a1=10; $a1>$a; $a1--){
            echo"*";
        }for($a2=11; $a2>$a; $a2--){
            echo"*";
        }echo"<br>";
    }
}
?>