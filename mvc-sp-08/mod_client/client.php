<?php
class Client{

    private $parametre = []; // Tableau = $_REQUEST

    private $oControleur; // objet

    public function  __construct($parametre){
        $this->parametre = $parametre;
        $this->oControleur = new ClientControleur($this->parametre);
    }

    public function choixAction(){
        if (isset($this->parametre['action'])){

            switch ($this->parametre['action']){
                case 'form_consulter':
                    $this->oControleur->form_consulter();
                    break;

                case 'form_ajouter':
                    $this->oControleur->form_ajouter();
                    break;

                case 'ajouter':
                    $this->oControleur->ajouter();
                    break;

                case 'form_modifier':
                    $this->oControleur->form_modifier();
                    break;

                case 'modifier':
                    $this->oControleur->modifier();

                case 'form_supprimer':
                    $this->oControleur->form_supprimer();
                    break;

                case 'supprimer':
                    $this->oControleur->supprimer();
                    break;
            }
        }else{
            $this->oControleur->lister();
        }

    }
}