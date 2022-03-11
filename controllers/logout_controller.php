<?php
session_start();
//si lien deconnexion ; destruction session
if(isset($_GET['page']) && $_GET['page'] == 'logout'){
    session_destroy();
}



?>