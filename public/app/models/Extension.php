<?php
namespace App\Model;

use Config\Database;

class Extension
{
    protected $table;
    protected $database;
    protected $connection;
    protected $query = "";
    public function __construct()
    {
        //connection
        $this->database = new Database;
        $this->connection = $this->database->getConnection();
    }

    public function getAll()
    {
        $response = $this->connection->query("SELECT * FROM ".$this->table)->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }
    public function last( $condition = [])
    {
        $query = "";
        if (sizeof($condition) != 0) {
            $query = " WHERE ";
        }
        foreach ($condition as $key => $value) {
            if ($query != " WHERE ") {
                $query .= "AND ";
            }
            if (is_string($value)) {
                $query .= $key." = '".$value."' ";
            } else {
                $query .= $key." = ".$value." ";
            }
        }
        
        $response = $this->connection->query("SELECT * FROM ".$this->table.$query)->fetchAll(\PDO::FETCH_ASSOC);
        if (sizeof($response) > 0) {
            return $response[sizeof($response)-1];
        }
        return null;
    }

    public function first( $condition = [])
    {
        $query = "";
        if (sizeof($condition) != 0) {
            $query = " WHERE ";
        }
        foreach ($condition as $key => $value) {
            if ($query != " WHERE ") {
                $query .= "AND ";
            }
            if (is_string($value)) {
                $query .= $key." = '".$value."' ";
            } else {
                $query .= $key." = ".$value." ";
            }
        }
        
        $response = $this->connection->query("SELECT * FROM ".$this->table.$query)->fetchAll(\PDO::FETCH_ASSOC);
        if (sizeof($response) > 0) {
            return $response[0];
        }
        return null;
    }

    public function get( $condition = [], $limit="", $order="")
    {
        $query = "";
        if (sizeof($condition) != 0) {
            $query = " WHERE ";
        }
        foreach ($condition as $key => $value) {
            if ($query != " WHERE ") {
                $query .= "AND ";
            }
            if (is_string($value)) {
                $query .= $key." = '".$value."' ";
            } else {
                $query .= $key." = ".$value." ";
            }
        }
        if ($order != "") {
            $query .= " ORDER BY ".$order;
        }
        if ($limit != "") {
            $query .=" LIMIT ".$limit;
        }
        $response = $this->connection->query("SELECT * FROM ".$this->table.$query)->fetchAll(\PDO::FETCH_ASSOC);
        return $response;
    }

    public function addNew($items = [])
    {
        $this->connection->insert($this->table, $items);
        return $this->connection->id();
    }

    public function update($conditions = [],  $items = [])
    {
        $this->connection->update($this->table, $items, $conditions);
        return true;
    }

    public function remove($condition = []) 
    {
        $this->connection->delete($this->table, $condition);
        return true;
    }
}
