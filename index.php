<?php
session_start();

include('view/commun/header.php');

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil' ;

switch ($page) {
    case 'accueil':
            include('view/accueil.php');
        break;
    case 'commentaire':
            include('view/com.php');
        break;
    
    default:
        include('view/accueil.php');
        break;
}
include('view/commun/footer.php');
?>