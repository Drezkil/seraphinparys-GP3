<?php

require_once 'include/configuration.php';

Autoloader::chargerClasse();

if(!isset($_REQUEST['gestion'])){
    // Ouverture par défaut
    $_REQUEST['gestion'] = 'accueil';
}

// Appel du routeur concerné par la valeur correspondante a la clé gestion
// require_once 'mod_' .$_REQUEST['gestion'].'/'.$_REQUEST['gestion'].'.php';
// var_dump($_REQUEST);
// Création d'un objet instance du routeur appelé.
$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();
