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
        $this->tpl->assign('titrePage',"Fiche client : Consultation");
        $this->tpl->assign('unClient',$client);
        $this->tpl->display('mod_client/vue/clientFicheVue.tpl');

    }


}
