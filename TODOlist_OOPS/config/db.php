<?php

class Database
{
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $dbname     = "todo_oop";

    protected function connect()
    {
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

class Query extends Database
{
    // Get User
    public function getData($table, $fields, $condition = "")
    {
        $conn = $this->connect();
        $sql = "SELECT $fields FROM $table";
        if (!empty($condition)) {
            $sql .= " WHERE $condition";
        }
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $rows = [];
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return [];
        }
    }

    // Get Task
    // public function getTaskData($table, $fields, $condition = "")
    // {
    //     $conn = $this->connect();

    //     $sql = "SELECT $fields FROM $table";

    //     if (!empty($condition)) {
    //         $sql .= " WHERE $condition";
    //     }

    //     $result = $conn->query($sql);

    //     if (!$result) {
    //         die("Query Failed: " . $conn->error);
    //     }

    //     if ($result->num_rows > 0) {
    //         $rows = [];
    //         while ($row = $result->fetch_assoc()) {
    //             $rows[] = $row;
    //         }
    //         return $rows;
    //     } else {
    //         return [];
    //     }
    // }

    // Create User
    public function insertData($table, $data = [])
    {
        $conn = $this->connect();
        $columns = implode(',', array_keys($data));
        $values  = implode("','", array_map([$conn, 'real_escape_string'], array_values($data)));
        $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
        if ($conn->query($sql)) {

            return true;
        } else {
            echo "Error: " . $conn->error;
            return false;
        }
        print_r($sql);
        exit;
    }

    // Create Task
    public function insertTask($table, $data = [])
    {
        $conn = $this->connect();
        $columns = implode(',', array_keys($data));
        $values  = implode("','", array_map([$conn, 'real_escape_string'], array_values($data)));
        $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
        if ($conn->query($sql)) {
            return true;
        } else {
            echo "Error: " . $conn->error;
            return false;
        }
        print_r($sql);
        exit;
    }

    // Update Task
    public function updateData($table, $data = [], $condition = "")
    {
        $conn = $this->connect();
        $updateFields = [];
        foreach ($data as $key => $value) {
            $value = $conn->real_escape_string($value);
            $updateFields[] = "$key = '$value'";
        }
        $updateFields = implode(", ", $updateFields);

        $sql = "UPDATE $table SET $updateFields WHERE $condition";

        if ($conn->query($sql)) {
            return true;
        } else {
            echo "Error: " . $conn->error;
            return false;
        }
    }

    // Delete Task
    public function deleteData($table, $condition = "")
    {
        $conn = $this->connect();

        $sql = "DELETE FROM $table WHERE $condition";
        // print_r($sql);
        // exit;
        if ($conn->query($sql)) {
            return true;
        } else {
            echo "Error: " . $conn->error;
            return false;
        }
    }
}
