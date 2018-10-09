<?php
namespace Config;

use Medoo\Medoo;
require 'vendor/autoload.php';


class Database
{
    protected $database;

    function __construct()
    {
         $this->database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'blog',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',            
        ]);
    }

    function getConnection()
    {
        return $this->database;
    }
    
}