<?php
$input = "renaldy";
$penanda = "/";

$input2 = "renaldy dan sahabat";
$penanda2 = "/";

$wadah = "";
for($i = 0 ; $i <= strlen($input) -1 ; $i++){
    $wadah .= $input[$i].$penanda ;
}

$raw = str_replace(' ','',explode('.',$input2));
$result = implode("",$raw);

$wadah2 = "";
for($iter = 0; $iter <= strlen($result) -1 ;$iter++){
    $wadah2 .= $result[$iter].$penanda2;
}

echo "output1";
echo "<br>";
echo chop($wadah,"/");

echo "<br>";
echo "output2";
echo "<br>";
echo chop($wadah2,"/");




?>