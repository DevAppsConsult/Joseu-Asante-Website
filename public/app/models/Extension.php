<?php
namespace App\Model;

use Config\Database;

class Extension
{
   protected $table;
   protected $database;
   protected $connection;
   protected $query = "";
   function __construct()
   {
       //connection
       $this->database = new Database;
       $this->connection = $this->database->getConnection();
   }

   function getAll()
   {
        $response = $this->connection->query("SELECT * FROM ".$this->table)->fetchAll(\PDO::FETCH_ASSOC);        
        return $response;
   }

   function first(array $condition = [])
   {
        $query = "";
        if(sizeof($condition) != 0)
        $query = " WHERE ";
        foreach($condition as $key => $value)
        {
            if($query != " WHERE ")
            {
                $query .= "AND ";
            }
            $query .= $key." = ".$value." ";
        }
        
        $response = $this->connection->query("SELECT * FROM ".$this->table.$query )->fetchAll(\PDO::FETCH_ASSOC);
        if(sizeof($response) > 0)        
        return $response[0];
        return [];
 
   }

   function get(array $condition,$limit="",$order="")
   {
       $query = "";
       if(sizeof($condition) != 0)
       $query = " WHERE ";
       foreach($condition as $key => $value)
       {
           if($query != " WHERE ")
           {
               $query .= "AND ";
           }
           $query .= $key." = ".$value." ";
       }
       if($order != "")
       {
           $query .= " ORDER BY ".$order;
       }
       if($limit != "")
       {
           $query .=" LIMIT ".$limit;
       }
       $response = $this->connection->query("SELECT * FROM ".$this->table.$query )->fetchAll(\PDO::FETCH_ASSOC);        
       return $response;

   }

   function new(array $items)
   {
        $this->database->insert($this->table, $items);
        return $this->database->id();
   }

   function update(array $conditions,array $items)
   {
        $this->database->update($this->table, $items, $conditions);
        return true;
   }

   function remove(array $condition)
   {
       $this->database->delete($this->table, $condition);
       return true;
   }
}
