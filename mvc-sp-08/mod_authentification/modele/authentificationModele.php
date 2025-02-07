<?php
class AuthentificationModele extends modele{

    private $parametre = [];

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function rechercherVendeur(AuthentificationTable $authEnCours){

        $sql = 'SELECT * FROM vendeur WHERE login = ?';

        $idRequete = $this->executeRequete($sql, [
           $authEnCours->getLogin(),
        ]);

        $authExistant = $idRequete->fetch(PDO::FETCH_ASSOC);

        if($idRequete->rowCount() == 1 && $authEnCours->getLogin() == $authExistant['login'] && $authEnCours->getMotdepasse() == $authExistant['motdepasse']){
            $_SESSION['login'] = $authEnCours->getLogin();
            $_SESSION['prenomNom'] = $authExistant['prenom'] . " " . $authExistant['nom'];

            return true;

        }

        AuthentificationTable::setMessageErreur("Authentification invalide.");
        return false;

    }
}