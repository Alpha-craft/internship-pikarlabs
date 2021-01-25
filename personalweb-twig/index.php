<?php
include "root.php";
include "components/data.php";
include "components/header.php";

echo $twig->render('index.twig', [
  'versi' => $versi,
  'keahlian' => $keahlian,
]);

?>