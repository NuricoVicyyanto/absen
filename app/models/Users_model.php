<?php
    class Users_model
    {
        private $table = 'users';
        private $db;
        public $path ="public/img";
        
        public function __construct() {
            $this->db = new Database;
        }

        public function getUser()
        {
             $this->db->query('SELECT * FROM ' . $this->table);
             return $this->db->resultSet();
        }
        public function getUserByid($id)
        {
            // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            // $this->db->bind('id',$id);
            // return $this->db->single();
        
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
        // public function tambahPengguna($data)
        // {
        //     $query = "INSERT INTO users VALUES (NULL, :"
        // }
    }
    // $date = date('Y-m-d H:i:s');
    // $query = "INSERT INTO mapel VALUES (NULL, :mt_pelajaran, :created_at, NULL, NULL)";
    // $this->db->query($query);
    // $this->db->bind('mt_pelajaran', $data['mt_pelajaran']);
    // $this->db->bind('created_at', $date);
    // $this->db->execute();
    // return $this->db->rowCount();