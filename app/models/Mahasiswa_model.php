<?php

class Mahasiswa_model {
    private $dbh;   // handler
    private $stmt;  //statement

    public function __construct() {
        //datasource-name
        $dsn = 'mysql:host=localhost;dbname=phpmvc_193040176';  // nama database disini

        try {
            $this->dbh = new PDO($dsn, 'root', ''); // id, password database
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}