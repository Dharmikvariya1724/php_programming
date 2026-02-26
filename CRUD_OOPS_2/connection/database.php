<?php

class Database{

    // Datbse Connection;
    private $db_host ="localhost";
    private $db_user ="root";
    private $db_pass ="";
    private $db_name ="test";

    private $conn = false;
    private $mysqli = null;
    private $result = array();

    // Database Connetion in Class To Call
    public function __construct(){

        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            $this->conn = true;
            if($this->mysqli->connect_error){
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        }

    }

    // Data Insert in database
    public function insert($table, $params=array()){
        if($this->tableExists($table)){
            // print_r ($params);
            $table_columns = implode(',',array_keys($params));
            $table_value = implode("','",($params));

            $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";
            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->insert_id);
                return true;
            }else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }else{
            return false;
        }
    }

    // Data Update in Databse
    public function update(){


        
    }

    // Data Delete in Databse
    public function delete(){


        
    }

    // Data Selecte in DB
    public function selcte(){


    
    }

    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }else{
                array_push($this->result, $table. "Do not Existe in Database");
                return false;
            }
        }
    }

    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    // Close Connection
    public function __destruct(){
        if(!$this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }
    }

}

?>