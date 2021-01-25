<?php

require_once "vendor/autoload.php";
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
$twig->addExtension(new \Twig\Extension\DebugExtension($loader))

?>