<?php
    class Siswa_model
    {
        // private $table = 'siswa';
        // private $table2 = 'kelas';
        private $db;
        
        public function __construct() {
            $this->db = new Database;
        }

        public function getAllsiswa()
        {
             $this->db->query('SELECT * FROM `siswa` JOIN kelas ON kelas.id = siswa.kelas_id');
             return $this->db->resultSet();
        }
        public function getUserByid($id)
        {
            // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            // $this->db->bind('id',$id);
            // return $this->db->single();
        
            $this->db->query('SELECT * FROM `siswa` JOIN kelas ON kelas.id = siswa.kelas_id WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
    }
    