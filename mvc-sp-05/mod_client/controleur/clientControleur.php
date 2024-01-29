<?php
class ClientControleur{

    private $parametre = []; // Tableau

    private $oVue; // Objet

    private $oModele; // Objet

    public function __construct($parametre){
        $this->parametre = $parametre;
        $this->oModele = new ClientModele($this->parametre);
        $this->oVue = new ClientVue($this->parametre);
    }

    public function lister(){

        $clients = $this->oModele->getListeClients();

        $this->oVue->genererAffichageListe($clients);

    }

    public function form_consulter(){
        $client = $this->oModele->getUnClient();

        $this->oVue->genererAffichageFiche($client);
    }
}