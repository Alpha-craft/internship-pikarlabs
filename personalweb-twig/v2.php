<?php
include "root.php";
include "components/data.php";  
include "components/func.php";

echo $twig->render('v2.twig',[
  'nav_item' => $nav_item,
  'bio' => $bio,
  'keahlian' => $keahlian,
  'pendidikan' => $pendidikan,
  'portofolio' => $portofolio,

]);
?>