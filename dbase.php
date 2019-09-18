<?php

class dbase extends PDO{

    private $host = "localhost";
    private $db = "olkeri_land";
    private $username = "postgres";
    private $password = "1234567890";

    public function __construct(){
        $dsn = "pgsql:host=$this->host; dbname=$this->db";
        try {
            parent::__construct($dsn, $this->username, $this->password);
            if($this->connect_error){
                die($this->connect_error);
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function get_keyTowns(){
        $sql = '
        SELECT
            id, name, ST_AsGeoJSON(geom) as geom
        FROM 
            key_towns
        ';
        $statement = $this->query($sql);
        var_dump($statement->fetchAll());
    }
}
$results = new dbase();
$results->get_keyTowns();






