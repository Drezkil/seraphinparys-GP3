<?php

class Autoloader{

    public static function chargerClasse(){
        spl_autoload_register([__CLASS__,'autoload']);

    }

    private static function autoload($maClasse){
        // $maClasse contient le nom de la classe appelée :
        // Accueil, AccueilController, AccueilVue, ClientController; Client
        // Mise de la premiere lettre de la classe en miniscule
        $maClasse = lcfirst($maClasse);

        // Creer un tableau avec l'arborescence des modules contenant les

        $repertoires = [
            'mod_accueil/',
            'mod_accueil/controleur/',
            'mod_accueil/modele/',
            'mod_accueil/vue/',
            'mod_client/',
            'mod_client/controleur/',
            'mod_client/modele/',
            'mod_client/vue/',
            'mod_authentification/',
            'mod_authentification/controleur/',
            'mod_authentification/modele/',
            'mod_authentification/vue/',
        ];

        foreach ($repertoires as  $repertoire){
            // Verifier si fichier existe
            // accueil.php, acceuilControleur,...
            if (file_exists($repertoire.$maClasse.'.php')){
                require_once ($repertoire.$maClasse. '.php');
                return;
            }
        }
    }
}