<?php
include "root.php";
include "components/data.php";
include "components/header.php";    
include "components/func.php";

echo $twig->render('v1.twig',[
  'nav_item' => $nav_item,
  'bio' => $bio,
  'keahlian' => $keahlian,
  'pendidikan' => $pendidikan,
  'portofolio' => $portofolio,

]);
include "components/email.php";

include "components/footer.php"
?>