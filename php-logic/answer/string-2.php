<?php
$input = "renaldy";
$penanda = "/";

$input2 = "renaldy dan sahabat";
$penanda2 = "/";

$wadah = "";
for($i = 0 ; $i <= strlen($input) -1 ; $i++){
    $wadah .= $input[$i].$penanda ;
}

$raw = str_replace(' ','',$input2);


$wadah2 = "";
for($iter = 0; $iter <= strlen($raw) -1 ;$iter++){
    $wadah2 .= $raw[$iter].$penanda2;
}

echo "output1";
echo "<br>";
echo chop($wadah,"/");

echo "<br>";
echo "output2";
echo "<br>";
echo chop($wadah2,"/");
echo "<br>";
echo join(', ', str_split($input));


?>