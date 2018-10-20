<?php
namespace App\Model;

use Config\Database;

class Payment extends Extension
{
    protected $table = 'payments';
    protected $database;
    protected $connection;
    protected $query = "";
    public function __construct()
    {
        //connection
        parent::__construct();
    }
}
