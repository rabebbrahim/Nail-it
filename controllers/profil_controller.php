<?php
session_start();

include_once 'login_controller.php';

$profil=new Profil();

$getProfil = $profil->checkMyProfil($email);



?>