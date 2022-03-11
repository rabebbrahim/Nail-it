<?php
session_start();




$produit = new Nails();


$prodId = $produit->getProdById($_GET['voir']);
echo '<br><br>';
//var_dump($prodId[0]['prix']);



?>


