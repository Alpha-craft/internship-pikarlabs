<?php
function getImg($data,$append){
  $result = [];

  array_push($result,$data);
  $result = array_merge($result,$append);
  return $result;
}
function carousel($image){
  include "components/carousel.php";
}

function email($dari,$subjek,$pesan){
  $kepada = "ainurahman03@gmail.com";
  echo $dari;
  echo $subjek;
  echo $pesan;
  $header = 'From: '.$dari;
  mail($kepada,$subjek,$pesan,$header);
  
}

?>