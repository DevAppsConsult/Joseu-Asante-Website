<?php
namespace App\Model;

use Config\Database;

class Blog extends Extension
{
    protected $table = 'blogs';
    protected $database;
    protected $connection;
    protected $query = "";
    public function __construct()
    {
        //connection
        parent::__construct();
    }
}
