<?php
class AuthentificationControleur{

    private $parametre = []; // Tableau

    private $oVue; // Objet

    private $oModele; // Objet

    public function __construct($parametre){
        $this->parametre = $parametre;
        $this->oModele = new AuthentificationModele($this->parametre);
        $this->oVue = new AuthentificationVue($this->parametre);
    }

    public function form_authentifier(){

        $prepareAuthentification = new AuthentificationTable();

        $this->oVue->genererAffichage($prepareAuthentification);

    }

    public function authentifier(){
        //var_dump($this->parametre);
        //die();
        $controleAuthentification = new AuthentificationTable($this->parametre);

        if($controleAuthentification->getAuthorisationSession() == false || $this->oModele->rechercherVendeur($controleAuthentification) == false){

            $this->oVue->genererAffichage($controleAuthentification);
        }else{

            header('Location:index.php');
        }



    }

    public function deconnecter(){
        session_destroy();
        $_SESSION = [];

        header('Location:index.php');

    }

}