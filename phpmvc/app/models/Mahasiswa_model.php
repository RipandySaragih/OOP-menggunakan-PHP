<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
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
           $this->db->query('SELECT * FROM ' . $this->table);
           return $this->db->resultSet();
        }

        public function getMahasiswaById($id)
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
}