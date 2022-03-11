<?php
session_start();

if(isset($_POST['profil']) && $_POST['profil']=='enregistrer'){
    if(!empty($_POST['pseudo']) && !empty($_POST['biographie']) && !empty($_POST['dateNaissance']) && !empty($_POST['pays']) && isset($_FILES['avatar']) && $_FILES['avatar']['error']==0){

        $pseudo = $_POST['pseudo'];
        $biographie = $_POST['biographie'];
        $dateNaiss = $_POST['dateNaissance'];
        $pays = $_POST['pays'];
        
        if($_FILES['avatar']['size'] <= 3000000){
            $infoAvatar = pathinfo($_FILES['avatar']['name']);
            $extensionAvatar = $infoImage['extension'];
            $extensionsArray = array ('png','gif','jpg','jpeg'); // les extentions qu on autorise
             $error=1;  
            if(in_array($extensionAvatar,$extensionsArray)){
    
                $adressAvatar = '../design/avatars/'.time() .'.'.$extensionAvatar;
                
                //on renome notre image avec une clé unique
                move_uploaded_file($_FILES['avatar']['tmp_name'], $adressAvatar);
                $avatar = $_FILES['avatar']['tmp_name'];
                $error=0;
                }
                var_dump($avatar);
            }
        $profil=new Profil();
        $newProfil=$profil->createProfil($pseudo,$dateNaiss,$pays,$biographie,$avatar);
    }
}