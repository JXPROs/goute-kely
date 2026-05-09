<?php

class Database
{
    private $host = "db.fr-pari1.bengt.wasmernet.com";
    private $dbname = "goute";
    private $username = "eda3491673958000646ac457ea8c";
    private $password = "069feda3-4916-7518-8000-5f0e46b1e66d";
    private $port = "10272";

    public function connect()
    {
        try {
            $pdo = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (PDOException $e) {

            die("Erreur connexion DB : " . $e->getMessage());
        }
    }
}
