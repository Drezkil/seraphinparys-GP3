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

    public function form_ajouter(){

        $prepareClient = new ClientTable();

        $this->oVue->genererAffichageFiche($prepareClient);

    }

    public function ajouter(){
        // Quel algo ?
        // Je controle les données envoyées

        // SI probleme survien ALORS
            // Retour au formulaire avec les données saisies
            // Ajout d'un message d'erreur
            // Aucune écriture en BD
        // SINON
            // Ecriture en BD
            // Retour à la liste clients
            // Ajout message succès
        // FINSI

        $controleClient = new ClientTable($this->parametre);


        if ($controleClient->getAutorisationBD() == false){

            $this->oVue->genererAffichageFiche($controleClient);

        }else{

            $this->oModele->addClient($controleClient);

            $this->lister();
        }

    }
}