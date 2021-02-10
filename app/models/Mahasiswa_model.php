<?php 

class Mahasiswa_model{
    private $dbh;
    private $stmt;
    // private $mhs =[
    //     [
    //         "Nama" => "Rifjan Jundila",
    //         "Alamat" => "Probolinggo",
    //         "Kelas" => "XI IPA"
    //     ],
    //     [
    //         "Nama" => "Fajar Hidayat",
    //         "Alamat" => "Bondowoso",
    //         "Kelas" => "XI IPS"
    //     ]
    // ];
    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=mahasiswa';

        try {
            $this->dbh = new PDO($dsn,'root','');
        } catch (PDOException $e) {
            die($e->getMessage);
        }
    }
    public function getALLmahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM tb_mhs');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}