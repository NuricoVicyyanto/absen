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
        // $data digunakan untuk mengambil $_POST Pada controller
        public function tambahPengguna($data)
        {
            $pass = password_hash($data['pass'], PASSWORD_DEFAULT);
            $imagePath='./public/img/users/';
            $image = $_FILES['foto']['name'];
            $path = $imagePath . $image;
            $target_file = $imagePath . basename($_FILES['foto']['name']);
            $imgtype = pathinfo($target_file, PATHINFO_EXTENSION);
            $allowed = array('jpeg', 'jpg', 'png');
            $filename = $_FILES['foto']['name'];
            $ext = pathinfo($filename,PATHINFO_EXTENSION);

            if (!in_array($ext,$allowed)) {
                // FLash::setFlash('Ekstensi','Format harus jpeg, jpg, png','warning');
                // header('Location' . base . 'pengguna/tambah_data.php');
            }else{
               move_uploaded_file($_FILES['foto']['tmp_name'],$path);
               $query = "INSERT INTO users VALUES (NULL, :foto_user, :nama_lengkap, :username, :password, :status)";
               $this->db->query($query);
               $this->db->bind('foto_user', $image);
               $this->db->bind('nama_lengkap', $data['nama']);
               $this->db->bind('username', $data['user']);
               $this->db->bind('password', $pass);
               $this->db->bind('status', $data['status']);
               $this->db->execute();
               return $this->db->rowCount();
            }
            
        }
    }
    // $date = date('Y-m-d H:i:s');
    // $query = "INSERT INTO mapel VALUES (NULL, :mt_pelajaran, :created_at, NULL, NULL)";
    // $this->db->query($query);
    // $this->db->bind('mt_pelajaran', $data['mt_pelajaran']);
    // $this->db->bind('created_at', $date);
    // $this->db->execute();
    // return $this->db->rowCount();