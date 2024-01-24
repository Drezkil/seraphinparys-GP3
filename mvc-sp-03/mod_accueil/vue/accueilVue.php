<?php
// 29/01 => Autoloader à mettre en place
class AccueilVue{

    private $parametre = []; // Un tableau associatif contenant le tableau $parametre
    private $tpl;

    public function __construct($parametre){

        $this->parametre = $parametre;

        $this->tpl = new Smarty();

        $tabBord = 'ici le Tableau de bord';

        $this->tpl->assign('deconnexion',"Déconnexion");

        $this->tpl->assign('login',"Ici le nom du vendeur connecté");

        $this->tpl->assign('tabBord', $tabBord);

        $this->tpl->display('mod_accueil/vue/accueilVue.tpl');

        //$titrePrincipal = "Séraphin PARYS";

        //require_once 'mod_accueil/vue/vue.php';
    }
}
