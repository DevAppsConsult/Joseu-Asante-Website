<?php
namespace Config;

use Medoo\Medoo;

require '../vendor/autoload.php';


class Database
{
    protected $database;

    public function __construct()
    {
        $this->database = new Medoo(
            [
            'database_type' => 'mysql',
            'database_name' => 'josey_article',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            ]
        );
    }

    public function getConnection()
    {
        return $this->database;
    }
}
