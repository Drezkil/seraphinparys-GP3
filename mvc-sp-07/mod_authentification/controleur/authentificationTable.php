<?php
class AuthentificationTable{

    private $login = "";

    private $motdepasse = "";

    private $authorisationSession = true ;

    private static $messageErreur = "" ;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        if (empty($login) || ctype_space($login)){
            self::setMessageErreur("Vous devez saisir votre Nom Utilisateur.");
            $this->setAuthorisationSession(false);
        }

        $this->login = $login;
    }

    public function getMotdepasse(): string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): void
    {
        $this->motdepasse = $motdepasse;
        if (!ctype_space($motdepasse) && !empty($motdepasse)){
            // Technique de salage le mot de passe

            $gauche = "ar30&y%";
            $droite = "tk!@";
            $this->motdepasse = hash('ripemd128',"$gauche$motdepasse$droite");

        }else{
            self::setMessageErreur("Vous devez saisir un mot de passe.");
            $this->setAuthorisationSession(false);
            $this->motdepasse = "";
        }

    }

    public function getAuthorisationSession(): bool
    {
        return $this->authorisationSession;
    }

    public function setAuthorisationSession(bool $authorisationSession): void
    {
        $this->authorisationSession = $authorisationSession;
    }

    public static function getMessageErreur(): string
    {
        return self::$messageErreur;
    }

    public static function setMessageErreur(string $messageErreur): void
    {
        self::$messageErreur = $messageErreur;
    }


    public function hydrater(array $data){
        foreach ($data as $k => $v){
            $setter = 'set'.ucfirst($k);
            if (method_exists($this,$setter)){
                $this->$setter($v);
            }
        }
    }

    public function __construct($data =null){
        if ($data != null){
            $this->hydrater($data);
        }
    }
}