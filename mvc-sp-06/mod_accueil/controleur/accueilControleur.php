<?php
class AccueilControleur{

    private $parametre = []; // Un tableau associatif contenant le tableau $parametre

    private $oVue; // Objet

    public function __construct($parametre)
    {
        //
        $this->parametre = $parametre;
        // Chargement du script accueilVue
        // require_once 'mod_accueil/vue/accueilVue.php';
        // Instanciation de la classe accueilVue
        $this->oVue = new AccueilVue($this->parametre);
    }

    public function lister(){

        $this->oVue->genererAffichageListe();

    }

}