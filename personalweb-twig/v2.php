<?php
include "root.php";
include "components/data.php";  
include "components/func.php";

$email = false;
if(isset($_POST['kirim'])){
  $dari = $_POST['from'];
  $subjek = $_POST['subjek'];
  $pesan = $_POST['msg'];
  email($dari,$subjek,$pesan);
  $email = true;
}

echo $twig->render('v2.twig',[
  'nav_item' => $nav_item,
  'bio' => $bio,
  'keahlian' => $keahlian,
  'pendidikan' => $pendidikan,
  'portofolio' => $portofolio,
  'modal_msg' => $modal_msg,
  'email' => $email

]);
?>