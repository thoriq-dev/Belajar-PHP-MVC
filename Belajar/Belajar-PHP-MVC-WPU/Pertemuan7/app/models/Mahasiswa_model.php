<?php

class Mahasiswa_model
{
    // Database Handler
    private $dbh;
    private $stmt;

    public function __construct()
    {
        // Data Source Name
        $dsn = 'mysql:dbname=phpmvc;host=127.0.0.1';
        $user = 'root';
        $password = '';
        // $this->dbh = new PDO($dsn, $user, $password);

        // Harus diperbaiki karena SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it
        try {
            $this->dbh = new PDO($dsn, $user, $password);
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
