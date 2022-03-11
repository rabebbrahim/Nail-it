<?php 
ini_set('display_errors','on');
error_reporting(E_ALL);


define('PATH_REQUIRE',substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // configuration concernant les fonctions d inclusion php
define('PATH', substr($_SERVER['PHP_SELF'],0 ,-9)); // configuration pour les img et les fichiers

//database setup

define('DATABASE_HOST',"localhost");
define('DATABASE_NAME',"Nailit");
define('DATABASE_USER',"rabeb");
define('DATABASE_PASSWORD',"rabeb");

?>

