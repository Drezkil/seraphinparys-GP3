<?php
class VendeurControleur{

    private $parametre = []; // Tableau

    private $oVue; // Objet

    private $oModele; // Objet

    public function __construct($parametre){
        $this->parametre = $parametre;
        $this->oModele = new VendeurModele($this->parametre);
        $this->oVue = new VendeurVue($this->parametre);
    }


    public function form_consulter(){
        $vendeur = $this->oModele->getUnVendeur();

        $this->oModele->stat01($vendeur);

        $this->oVue->genererAffichageFiche($vendeur);
    }



    public function form_modifier(){

        $vendeur = $this->oModele->getUnVendeur();

        $this->oModele->stat01($vendeur);

        $this->oVue->genererAffichageFiche($vendeur);

    }


    public function modifier(){
        // même algo que pour ajouter

        $controleVendeur = new VendeurTable($this->parametre);


        if ($controleVendeur->getAutorisationBD() == false){

            $this->oVue->genererAffichageFiche($controleVendeur);

        }else{

            $this->oModele->editVendeur($controleVendeur);

            $this->form_consulter();
        }

    }

}
