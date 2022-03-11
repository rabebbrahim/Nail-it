<?php
session_start();

//include_once '../classes/Nails.php';

$nails = new Nails();
$vernis =$nails->getProdByCategory(1);
$designNail = $nails->getProdByCategory(2);
$gadgets =$nails->getProdByCategory(3);
$tout =$nails->getAllProducts();
?>
