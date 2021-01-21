<?php
function getImg($data,$append){
  $result = [];

  array_push($result,$data);
  $result = array_merge($result,$append);
  return $result;
}
function showModal($image){
  include "components/carousel.php";
}
?>