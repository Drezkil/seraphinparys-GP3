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

    public function form_modifier(){

        $client = $this->oModele->getUnClient();

        $this->oVue->genererAffichageFiche($client);

    }

    public function form_supprimer(){

        $client = $this->oModele->getUnClient();

        $this->oVue->genererAffichageFiche($client);

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

    public function modifier(){
        // même algo que pour ajouter

        $controleClient = new ClientTable($this->parametre);


        if ($controleClient->getAutorisationBD() == false){

            $this->oVue->genererAffichageFiche($controleClient);

        }else{

            $this->oModele->editClient($controleClient);

            $this->lister();
        }

    }

    public function supprimer(){

        // Un client possédant une commande ne peut être supprimé
        // Quel Algo ?
        // SI le codec client est retouvé dans la table commande ALORS
        // supression impossible + message
        // SINON
        // DELETE
        // puis retour a la liste avec le message
        $controleSuppression = $this->oModele->suppressionPossible();

        if ($controleSuppression == false){

            ClientTable::setMessageErreur('Ce client possède déjà une commande. La supression est impossible.');

            $this->oVue->genererAffichageFiche($this->oModele->getUnClient());

        }else{

            $this->oModele->deleteClient();

            $this->lister();
        }


    }
}