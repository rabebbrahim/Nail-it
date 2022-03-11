<?php

class Profil{

   // validations de formulaires de création de profils

   public function createProfil($pseudo, $dateNaiss, $pays, $biographie, $avatar){
       global $db;
       $profil = $db ->prepare ('
       INSERT INTO profil (date_naissance,biographie,pays,avatar,pseudo)VALUES(?,?,?,?,?)'
   );
    $profil -> execute(array($pseudo,$dateNaiss,$pays,$biographie,$avatar));
   }


   // fonction pour recuperer donnée pour le profil

   public function checkMyProfil($session){
       global $db;
       $getProfil= $db -> prepare('
       SELECT * FROM profil as P, publications as Pb, bloggeuse as B 
       WHERE P.id_profil = Pb.id_bloggeuse AND Pb.id_bloggeuse=B.id AND B.email=? ');
       $getProfil -> execute(array($session));
       $datas = $getProfil -> fetchAll(PDO::FETCH_ASSOC);
       return $datas;
   }

}