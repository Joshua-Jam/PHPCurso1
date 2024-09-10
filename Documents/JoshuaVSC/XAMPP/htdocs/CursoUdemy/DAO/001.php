<?php

class Sql extends PDO {
    
    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "root");

    }

    public function query($rawQuery, $params = array()){

        $stmt = $this->conn->prepare($rawQuery);

        foreach ($params as $key => $value) {
            $stmt->bindParam($key);
        }
    }

}

?>