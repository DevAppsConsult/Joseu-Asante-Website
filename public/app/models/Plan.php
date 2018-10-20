<?php
namespace App\Model;

use Config\Database;

class Plan extends Extension
{
    protected $table = 'plan';
    protected $database;
    protected $connection;
    protected $query = "";
    public function __construct()
    {
        //connection
        parent::__construct();
    }
}
