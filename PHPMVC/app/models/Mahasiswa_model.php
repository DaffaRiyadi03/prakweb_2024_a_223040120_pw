<?php

class Mahasiswa_model
{
    private $dbh; // database handler

    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3307;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}


?>