<?php
include_once "parsedown/Parsedown.php";
$contents = file_get_contents($file);
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
?>