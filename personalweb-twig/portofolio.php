<?php
include "root.php";
include "components/data.php";  
include "components/func.php";
$cek = false;


if( isset($_GET['id'] ) ){
  @$id = $_GET['id'];
  @$cek =  cekId($_GET['id'],$portofolio);
  @$galeri = $portofolio[$id]['imgs'] ;
  @$judul = $portofolio[$id]['judul'];
  @$desc = $portofolio[$id]['desc'];
  @$tahun = $portofolio[$id]['tahun'];
  @$main_image = $portofolio[$id]['img'];
  @$image = getImg($main_image,$galeri);
  @$link = $portofolio[$id]['link'];
}
else{
  header("location:v2.php");
}

echo $twig->render('portofolio.twig',[
  'portofolio' => $portofolio,
  'cek' => $cek,
  'id' => $id,
  'image' => $image,
  'judul' => $judul,
  'desc' => $desc,
  'tahun' => $tahun,
  'main_image' => $main_image,
  'galeri' => $galeri,
  'link' => $link,
]);

?>