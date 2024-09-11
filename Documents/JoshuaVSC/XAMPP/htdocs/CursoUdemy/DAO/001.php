<?php

class Sql extends PDO {
    
    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "root");

    }

    private function setParams($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $statement->bindParam($key, $value);
    }

    private function setParam($statement, $key, $value){
        
        $statemente->bindParam($key, $value);

    }


    public function query($rawQuery, $params = array()){

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt->fetchALL(PDO::FETCH_ASSOC);
        }
    }
}

?>