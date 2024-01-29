<?php
class Accueil{

    private $parametre = []; // Un tableau associatif contenant le tableau $_REQUEST

    private $oControleur; // Objet instance du controleur

    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        // require_once 'controleur/accueilControleur.php';

        $this->oControleur = new AccueilControleur($parametre);



    }

    public function choixAction(){
        // Stucture switch : ajouter, modifier, supprimmer (pour une orientation en bd)
        // form_ajouter, form_modifier, form_consulter,...
        // Par défaut si aucune action précisée alors lister()
        $this->oControleur->lister();
    }

}