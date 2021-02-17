<?php

class Guru_model
{

    public function getALLguru()
    {
       $this->stmt = $this->dbh->prepare("SELECT * FROM tb_guru");
       $this->stmt->execute();
       return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
