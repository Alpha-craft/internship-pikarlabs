<?php
include "root.php";
include "components/data.php"; 
include "components/func.php";

if(isset($_POST['kirim'])){
  $dari = $_POST['from'];
  $subjek = $_POST['subjek'];
  $pesan = $_POST['msg'];
  $email = true;
  email($dari,$subjek,$pesan);
}

echo $twig->render('v1.twig',[
  'nav_item' => $nav_item,
  'bio' => $bio,
  'keahlian' => $keahlian,
  'pendidikan' => $pendidikan,
  'portofolio' => $portofolio,
  'modal_msg' => $modal_msg,
  'email' => $email

]);
?>