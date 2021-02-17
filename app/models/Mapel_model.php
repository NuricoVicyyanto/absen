<?php

class Mapel_model{

    public function getALLmapel()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mapel');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}