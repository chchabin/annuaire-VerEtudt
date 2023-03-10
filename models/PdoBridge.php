<?php

class PdoBridge
{
    private static string $serveur = 'mysql:host=localhost';
    private static string $bdd = 'dbname=annuaire';
    private static string $user = 'root';
    private static string $mdp = '';
    private static  $monPdoBridge = null;
    /**
     * @var PDO   <--- need by PhpStorm to find Methods of PDO
     */
    private static PDO $monPdo;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        self::$monPdo = new PDO(self::$serveur . ';' . self::$bdd, self::$user, self::$mdp);
        self::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        self::$monPdo = null;

    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     *
     * Appel : $instancePdolafleur = PdoBridge::getPdoBridge();
     * @return l'unique objet de la classe PdoBridge
     */
    public static function getPdoBridge()
    {
        if (self::$monPdoBridge == null) {
            self::$monPdoBridge = new PdoBridge();
        }
        return self::$monPdoBridge;
    }

    public function getLesMembres()
    {
        // modifiez la requête sql
        $sql = 'SELECT id FROM membres';
        $lesLignes = self::$monPdo->query($sql);
        return $lesLignes->fetchALL(PDO::FETCH_ASSOC);
    }

    public function getMaxId()
    {
        // modifiez la requête sql
        $req = "SELECT id AS maxi FROM membres";
        $res = self::$monPdo->query($req);
        $lesLignes = $res->fetch();
        return 1 + intval($lesLignes["maxi"]);
    }

    public function insertMembre($nom, $prenom)
    {
        // modifiez la requête sql
        $id = $this->getMaxId();
        // modifiez la requête sql
        $sql = 'INSERT INTO membres Value($id)';
        $req = self::$monPdo->exec($sql);
    }
}
