<?php

class Mahasiswa_model {
    private $dbh;
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost:3308;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    // private $mhs = [
    //     [
    //         "nama" => "Ripandy Putra Juamanda Saragih",
    //         "nrp" => "13323003",
    //         "email" => "ripandy12345678@gmail.com",
    //         "jurusan" => "D3 Teknologi Komputer"
    //     ],
    //     [
    //         "nama" => "Yehezkiel Rumapea",
    //         "nrp" => "13323032",
    //         "email" => "yehezkiel12345678@gmail.com",
    //         "jurusan" => "D3 Teknologi Komputer"
    //     ],
    //     [
    //     "nama" => "Rudi Tabuti",
    //     "nrp" => "13323060",
    //     "email" => "rudyganteng2345678@gmail.com",
    //     "jurusan" => "D3 Teknologi Komputer"
    //     ]
    //     ];

        public function getAllMahasiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}