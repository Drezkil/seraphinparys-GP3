<?php
class clientVue{

    private $parametre = [];

    private $tpl; // Objet

    public function __construct($parametre){
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function chargementPrincipal(){
        $this->tpl->assign('titrePrincipal',"Séraphin PARYS");
        $this->tpl->assign('deconnexion',"Déconnexion");
        $this->tpl->assign('login',"Ici le nom du vendeur connecté");
    }

    public function genererAffichageListe($clients){
        $this->chargementPrincipal();
        $this->tpl->assign('titrePage',"Liste des clients");
        $this->tpl->assign('listeClients',$clients);
        $this->tpl->display('mod_client/vue/clientListeVue.tpl');
    }

    public function genererAffichageFiche($client){

        $this->chargementPrincipal();

        switch ($this->parametre['action']){

            case 'form_consulter':

                $this->tpl->assign('action','consulter');

                $this->tpl->assign('titrePage',"Fiche client : Consultation");

                $this->tpl->assign('unClient',$client);

                $this->tpl->assign('readonly','disabled');
                break;

            case 'form_ajouter':
            case 'ajouter':

                $this->tpl->assign('action','ajouter');

                $this->tpl->assign('titrePage',"Fiche client : Création");

                $this->tpl->assign('unClient',$client);

                $this->tpl->assign('readonly','');
                break;

            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('action','modifier');

                $this->tpl->assign('titrePage',"Fiche client : Modification");

                $this->tpl->assign('unClient',$client);

                $this->tpl->assign('readonly','');
                break;

            case 'form_supprimer':

                $this->tpl->assign('action','supprimer');

                $this->tpl->assign('titrePage',"Fiche client : Suppression");

                $this->tpl->assign('unClient',$client);

                $this->tpl->assign('readonly','disabled');
                break;

        }

        $this->tpl->display('mod_client/vue/clientFicheVue.tpl');


    }


}
