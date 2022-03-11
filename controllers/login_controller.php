<?php 
session_start();

// Authentication
if(isset($_POST['login']) && $_POST['login']=='done'){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $bloggeuse= new Bloggeuse();
        $checkBloggeuse = $bloggeuse ->checkDatasLogin($email,$password);
        $getDatasBloggeuse =$bloggeuse->getDatasBloggeuse($email);
        echo '<pre>';
        echo $checkBloggeuse;
        echo '</pre>';
        if($checkBloggeuse == 0){
            $alertLogin = Alert::message('email or password invalid', 'red','orange');
    
        }else{
            $sessionFirstName = $bloggeuse ->getDatasBloggeuse('firstname');
            $sessionLastName = $bloggeuse ->getDatasBloggeuse('lastname');
            $sessionPass = $bloggeuse ->getDatasBloggeuse('password');
            $_SESSION['firstname']= $sessionFirstName;
            $_SESSION['lastname']= $sessionLastName;
            $_SESSION['password']=$sessionPass;
            $_SESSION['email']=$email;
            echo "test";
            header('Location:index.php?page=home');
            //problème avec le header, ne redirige pas vers la page: header permet pas
            //de passer vers le mécanisme MVC => pas la bonne méthode. trouver autre chose 
            //rootage fonctionnelle. 
        }

    }else{
        $alertLogin=Alert::message('Please insert all the missing cases','red','orange');
    }
}


?>