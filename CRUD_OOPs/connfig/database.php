<?php

class Database {

    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $dbname     = "php_oop";

    protected function connect() {

        $conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        return $conn;
    }
}

class Query extends Database {

    public function getData($table, $fields) {

        $sql = "SELECT $fields FROM $table ";
        // echo $sql;
        // exit;
            $conn = $this->connect();
            $result = $conn->query($sql);
            
        try {
            $conn = $this->connect();
            $result = $conn->query($sql);

            return $result;

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }

            print_r ($result);
            exit;

    }

    public function insertData($table) {

        $sql = "INSERT INTO $table(`name`, `email`, `phone`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
            $conn = $this->connect();
            $result = $conn->query($sql);   

            print_r ($result);
            exit;

    }

}