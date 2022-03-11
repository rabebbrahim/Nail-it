<?php

include_once 'setting.php';

try{
    
    $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8',DATABASE_USER, DATABASE_PASSWORD);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $exception){
    echo 'Erreur' .$exception ->getMessage();
}
?> 