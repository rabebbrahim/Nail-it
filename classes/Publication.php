<?php
class Publication{



    public function createPublication($titre,$description,$image){
        global $db;
        $newPub = $db ->prepare('
        INSERT INTO publications(titre, description,img) VALUES (?, ?, ?)');
        $newPub -> execute(array($titre,$description,$image));
    }



    public function getAllPublications(){
        global $db;

        $allPublications =$db -> prepare('
        SELECT * 
        FROM publications 
       ');
        $allPublications ->execute();
        $getDatas = $allPublications -> fetchAll(PDO::FETCH_ASSOC);
        return $getDatas;
    }
    public function getMyPublication($session){
        global $db;
        $myReq=$db -> prepare ('
        SELECT * FROM publications as P, bloggeuse as B 
        WHERE P.id_bloggeuse=B.id AND B.email =?');
        $myReq ->execute(array($session));
        $getReq = $myReq -> fetchAll(PDO::FETCH_ASSOC);
        return $getReq;
    }


}