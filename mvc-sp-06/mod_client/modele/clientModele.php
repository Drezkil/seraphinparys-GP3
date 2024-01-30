<?php
class clientModele extends Modele{

    private $parametre = [];

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function getListeClients(){
        $sql = 'SELECT * FROM client';

        $idRequete = $this->executeRequete($sql);

        if ($idRequete->rowCount()>0){
            while ($unClient = $idRequete->fetch(PDO::FETCH_ASSOC)){
                $listeClients[] = new clientTable($unClient);
            }
            return $listeClients;
        }else{
            return null;
        }
    }

    public function getUnClient(){
        $sql = 'SELECT * FROM client WHERE codec = ?';

        $idRequete = $this->executeRequete($sql, [
            $this->parametre['codec']
            ]);

            $leClient = new ClientTable($idRequete->fetch(PDO::FETCH_ASSOC));
                return $leClient;


    }

    public function addclient(ClientTable $unClient){
        $sql = 'INSERT INTO client (nom, adresse, cp, ville, telephone) VALUES (?,?,?,?,?)';

        $idRequete = $this->executeRequete($sql, [
            $unClient->getNom(),
            $unClient->getAdresse(),
            $unClient->getCp(),
            $unClient->getVille(),
            $unClient->getTelephone(),
        ]);

        if ($idRequete){
            ClientTable::setMessageSucces("Client ajouté avec succès");
        }
    }
}