<?php

//include les page dans cette page index.php
// elle va servir comme un router pour les autre pages 
// inclure toute les classes a la fin du projet 

include_once './settings/database.php';
include_once './classes/Alert.php';
include_once './classes/Bloggeuse.php';
include_once './classes/Publication.php';
include_once './classes/Profil.php';
include_once './classes/Nails.php';

if(isset($_GET['page']) AND !empty($_GET['page'])){
    $page = trim(strtolower($_GET['page']));
}else{
    $page ='home';
}

// array contenant toutes les pages
// scandir retourne la liste des dossiers dans un dossier  
$allPages = scandir('controllers');
if (in_array($page.'_controller.php',$allPages)){
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
}else{
    echo '<h1> ERROR 404 </h1>';
}