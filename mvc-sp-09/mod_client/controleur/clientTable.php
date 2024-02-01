<?php


class clientTable {

    private $codec;
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $telephone;

    private $stat01;

    private $autorisationBD = true;

    private static $messageErreur = "";

    private static $messageSucces = "";

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

    /**
     * @return mixed
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * @param mixed $codec
     */
    public function setCodec($codec): void
    {
        $this->codec = $codec;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        if (empty($nom|| ctype_space($nom))){
            self::setMessageErreur("Le nom du client est obligatoire.");
            $this->setAutorisationBD(false);
        }
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp): void
    {
        if (empty($cp|| ctype_space($cp))){
            self::setMessageErreur("Le Code Postal du client est obligatoire.");
            $this->setAutorisationBD(false);
        }
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        if (empty($ville|| ctype_space($ville))){
            self::setMessageErreur("Le nom de la ville du client est obligatoire.");
            $this->setAutorisationBD(false);
        }
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        if (empty($telephone|| ctype_space($telephone))){
            self::setMessageErreur("Le numéro de téléphone du client est obligatoire.");
            $this->setAutorisationBD(false);
        }
        $this->telephone = $telephone;
    }

    public function getAutorisationBD(): bool
    {
        return $this->autorisationBD;
    }

    public function setAutorisationBD(bool $autorisationBD): void
    {
        $this->autorisationBD = $autorisationBD;
    }

    public static function getMessageErreur(): string
    {
        return self::$messageErreur;
    }

    public static function setMessageErreur(string $messageErreur): void
    {
        self::$messageErreur = self::$messageErreur . $messageErreur . "<br>";
    }

    public static function getMessageSucces(): string
    {
        return self::$messageSucces;
    }

    public static function setMessageSucces(string $messageSucces): void
    {
        self::$messageSucces = self::$messageSucces . $messageSucces . "<br>";
    }

    /**
     * @return mixed
     */
    public function getStat01()
    {
        return $this->stat01;
    }

    /**
     * @param mixed $stat01
     */
    public function setStat01($stat01): void
    {
        $this->stat01 = $stat01;
    }



}