<?php
    class Users_model
    {
        private $table = 'users';
        private $db;
        
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
    }
    