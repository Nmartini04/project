<?php


if(isset($_GET['page']) AND !empty($_GET['page'])){

    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'accueil';
}

$allPages = scandir('views/');

if(in_array($page.'_view.php', $allPages)){

    include_once 'models/'.$page.'_model.php';
    include_once 'views/'.$page.'_view.php';

} else {

    echo "erreur 404";

}