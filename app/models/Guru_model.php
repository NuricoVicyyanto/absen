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
    public function getGuruByid($nip)
    {
        // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        // $this->db->bind('id',$id);
        // return $this->db->single();
    
        $this->db->query("SELECT guru.id, guru FROM ' . $this->table . ' WHERE nip=:nip");
        $this->db->bind('nip', $nip);
        return $this->db->single();
    }    
    public function tambahGuru($data)
    {
        $pass = password_hash($data['pass'], PASSWORD_DEFAULT);
        $imagePath = './public/img/guru';
        $image = $_FILES['foto']['name'];
        $path = $imagePath . $image;
        $target_file = $imagePath . basename($_FILES['foto']['name']);
        $imgtype = pathinfo($target_file, PATHINFO_EXTENSION);
        $allowed = array('jpeg','jpg','png');
        $filename = $_FILES['foto']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
        }else{
            date_default_timezone_set('Asia/Jakarta');
            $date = date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['foto']['name'],$path);
            $query = "INSERT INTO guru VALUES (NULL, :nip, :nama_lengkap, :foto_guru, :username, :password, :alamat, :no_hp, :email, :mapel_id, :created_at, NULL)";
            $this->db->query($query);
            $this->db->bind('nip', $data['nip']);
            $this->db->bind('nama_lengkap', $data['nama']);
            $this->db->bind('foto_guru', $image);
            $this->db->bind('username', $data['user']);
            $this->db->bind('password', $pass);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('no_hp', $data['nohp']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('mapel_id', $data['mapel']);
            $this->db->bind('created_at', $date);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
}
