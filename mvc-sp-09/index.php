<?php
session_start();

require_once 'include/configuration.php';

Autoloader::chargerClasse();

if (!isset($_SESSION['login'])){

    $_REQUEST['gestion'] = 'authentification';
}elseif(!isset($_REQUEST['gestion'])){
    // Ouverture par défaut
    $_REQUEST['gestion'] = 'accueil';
}

//var_dump($_REQUEST);

// Appel du routeur concerné par la valeur correspondante a la clé gestion
// require_once 'mod_' .$_REQUEST['gestion'].'/'.$_REQUEST['gestion'].'.php';
// var_dump($_REQUEST);
// Création d'un objet instance du routeur appelé.
$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();
