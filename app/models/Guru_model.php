<?php

class Guru_model
{

    // public function getALLguru()
    // {
    //    $this->stmt = $this->dbh->prepare("SELECT * FROM tb_guru");
    //    $this->stmt->execute();
    //    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    private $table = 'guru';
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllguru()
    {
         $this->db->query('SELECT * FROM ' . $this->table);
         return $this->db->resultSet();
    }
    public function getUserByid($nip)
    {
        // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        // $this->db->bind('id',$id);
        // return $this->db->single();
    
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nip=:nip');
        $this->db->bind('nip', $nip);
        return $this->db->single();
    }    
}
