<?php

//Declaration du fichier racine.
declare(strict_types=1);
    define('ROOT', __DIR__ . '/');

//Appel de la page principale
    include ROOT . "./src/page/home.php";

//Debug PHP à supprimer à la fin du projet
    include ROOT . 'controler/debug-info.php';
  
?>