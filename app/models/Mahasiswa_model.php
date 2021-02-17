<?php

class Mahasiswa_model{

    public function getALLmahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM tb_mhs');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}