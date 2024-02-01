<?php
class vendeurModele extends Modele{

    private $parametre = [];

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }


    public function getUnVendeur(){
        $sql = 'SELECT * FROM vendeur WHERE login = ?';



        $idRequete = $this->executeRequete($sql, [
            $_SESSION['login'],
        ]);

        $leVendeur = new VendeurTable($idRequete->fetch(PDO::FETCH_ASSOC));
        return $leVendeur;


    }

    public function editVendeur(VendeurTable $unClient){

        $sql = 'UPDATE vendeur SET nom = ?, adresse = ?, cp = ?, ville = ?, telephone = ? WHERE codev = ?';

        $idRequete = $this->executeRequete($sql, [
            $unClient->getNom(),
            $unClient->getAdresse(),
            $unClient->getCp(),
            $unClient->getVille(),
            $unClient->getTelephone(),
            $unClient->getCodev(),
        ]);

        if ($idRequete){
            VendeurTable::setMessageSucces("Modification effectuée avec succès.");
        }
    }

    public function stat01(VendeurTable $enCours){

        $sql = 'SELECT SUM(total_ht) AS st01 FROM commande WHERE codev = ?';

        $idRequete = $this->executeRequete($sql, [
            $enCours->getCodev(),
        ]);

        $row = $idRequete->fetch(PDO::FETCH_ASSOC);
        if ($row['st01'] != null){
            $enCours->setStat01($row['st01']);
        }else{
            $enCours->setStat01(0);
        }

    }

}