<?php
class vendeurVue{

    private $parametre = [];

    private $tpl; // Objet

    public function __construct($parametre){
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function chargementPrincipal(){
        $this->tpl->assign('titrePrincipal',"Séraphin PARYS");
        $this->tpl->assign('deconnexion',"Déconnexion");
        $this->tpl->assign('login',$_SESSION['prenomNom']);
    }

    public function genererAffichageFiche($vendeur){

        $this->chargementPrincipal();

        switch ($this->parametre['action']){

            case 'form_consulter':

                $this->tpl->assign('action','consulter');

                $this->tpl->assign('titrePage',"Fiche Vendeur");

                $this->tpl->assign('unVendeur',$vendeur);

                $this->tpl->assign('readonly','disabled');
                break;


            case 'form_modifier':
            case 'modifier':

                $this->tpl->assign('action','modifier');

                $this->tpl->assign('titrePage',"Fiche Vendeur : Modification");

                $this->tpl->assign('unVendeur',$vendeur);

                $this->tpl->assign('readonly','');
                break;

        }

        $this->tpl->display('mod_vendeur/vue/vendeurVue.tpl');


    }


}