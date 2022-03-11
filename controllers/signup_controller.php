<?php
session_start();

// create new account
if(isset($_POST['signup']) && $_POST['signup']=='done'){
    echo 'signup';
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['password'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
       // sha1 c est pour encrypter le mot de passe ( ça remplace l ancien md5 )
        $bloggeuse =new Bloggeuse();
       // verifier si l email est existant ou pas ça va retourner (0/1)
        $existedBloggeuse = $bloggeuse ->verifyMailAvalable($email);
        if($existedBloggeuse==1){
            $alertSign = Alert::message('Mail already exists !!!','red','orange');
            echo "alert";
        }else{
            $newBloggeuse = $bloggeuse -> createBloggeuse($firstname,$lastname,$email, $password);
            $alertSign= Alert::message('You registered successfully','white','green');
            echo "register done";
        }
    }else{
        $alertSign= Alert::message('veuillez remplir toutes les cases' , 'red','grey');
    }
}

?>