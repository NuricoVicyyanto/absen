<?php

class Mapel_model{

//     public function getALLmapel()
//     {
//         $this->stmt = $this->dbh->prepare('SELECT * FROM mapel');
//         $this->stmt->execute();
//         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
//     }
// }
private $table = 'mapel';
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllmapel()
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