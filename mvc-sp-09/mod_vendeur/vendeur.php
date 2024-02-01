<?php
class Vendeur{

    private $parametre = []; // Tableau = $_REQUEST

    private $oControleur; // objet

    public function  __construct($parametre){
        $this->parametre = $parametre;
        $this->oControleur = new VendeurControleur($this->parametre);
    }

    public function choixAction(){
        if (isset($this->parametre['action'])){

            switch ($this->parametre['action']){
                case 'form_consulter':
                    $this->oControleur->form_consulter();
                    break;

                case 'form_modifier':
                    $this->oControleur->form_modifier();
                    break;

                case 'modifier':
                    $this->oControleur->modifier();
            }
        }else{
            $this->oControleur->form_consulter();
        }

    }
}