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
  $header = 'From: '.$dari;
  mail($kepada,$subjek,$pesan,$header);
}

function cekId($id,$data){
  // jika indexnya ditemukan sesuai id
  $hasil = null;
  foreach ($data as $i => $datas){
    if($id == $i) {
      $hasil = true; //override varibel untuk cek
    }
  }
  return $hasil;
}

?>