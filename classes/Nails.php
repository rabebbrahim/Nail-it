<?php 

class Nails{

public function getAllProducts(){
    global $db;
    $req=$db->prepare('SELECT * FROM produits');
    $req->execute();
    $getProd=$req->fetchAll(PDO::FETCH_ASSOC);
    return $getProd;
}

public function getProdByCategory($categorie){
    global $db;
    $req=$db-> prepare('SELECT * FROM produits WHERE categorie = ?');
    $req-> execute(array($categorie));
    $getCat=$req->fetchAll(PDO::FETCH_ASSOC);
    return $getCat;
}

public function getAllCategories(){
    global $db;
    $req=$db->prepare('SELECT * FROM categorie');
    $req->execute();
    $getdatas=$req->fetchAll(PDO::FETCH_ASSOC);
    return $getdatas;
}

public function getProdById($id){
    global $db;
    $req=$db->prepare('SELECT * FROM produits WHERE id_produit = ?');
    $req ->execute(array($id));
    $prod =$req->fetchAll(PDO::FETCH_ASSOC);
    return $prod;
}

}