<?php
class Bloggeuse{

    //fonction pour creer nouveau compte de bloggeuse

    public function createBloggeuse($firstname , $lastname, $email, $password){
        global $db; 
        $newBloggeuse = $db ->prepare('
        INSERT INTO bloggeuse(firstname,lastname,email,password) VALUES (?, ?, ?, ?)');

        $newBloggeuse -> execute(array($firstname,$lastname,$email,$password));
    }

    //fonction pour verifier si mail existe deja (retourne un bool (0/1))
    public function verifyMailAvalable($mail){
        global $db;
        $reqDatas = $db ->prepare('
        SELECT * FROM bloggeuse
        WHERE email= ?');
         
        $reqDatas ->execute(array($mail));
        $dataExists = $reqDatas ->rowCount();// renvoi un boolean
        return $dataExists;

        

    }
    // fonction pour verifier les info lors du login du tableau bloggeuse BDD

    public function checkDatasLogin($email,$pass){
        global $db;
        $reqDatas = $db ->prepare('
        SELECT * FROM bloggeuse
        WHERE email= ?
        AND password= ?
        ');
        $reqDatas->execute(array($email,$pass));
        $datasExists = $reqDatas->rowCount();// boolean 
        return $datasExists;
    }

   // fonction pour recuperer les info du tableau bloggeuse en BDD


   public function getDatasBloggeuse($email){
       global $db;
       $bloggeuse = $db -> prepare('
       SELECT * FROM bloggeuse WHERE email = ?');
       $bloggeuse -> execute(array($email));
       $req = $bloggeuse -> fetchAll(PDO::FETCH_ASSOC);
       return $req ;
   }

   // fonction pour recuperer l id du bloggeuse

   public function getIdBloggeuse($email){
       global $db;
       $idB=$db ->prepare('
       SELECT id_bloggeuse 
       FROM bloggeuse,
       WHERE email =?');
       $idB->execute(array($email));
       $data = $idB ->fetch();
       return $data;
   }

   




  

    
}