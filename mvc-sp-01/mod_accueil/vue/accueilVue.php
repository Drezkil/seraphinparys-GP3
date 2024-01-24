<?php
class AccueilVue{

    private $parametre = []; // Un tableau associatif contenant le tableau $parametre

    public function __construct($parametre){

        $this->parametre = $parametre;

        $titrePrincipal = "Séraphin PARYS";

        require_once 'mod_accueil/vue/vue.php';
    }
}
