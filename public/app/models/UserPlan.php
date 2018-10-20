<?php
namespace App\Model;

use Config\Database;

class UserPlan extends Extension
{
    protected $table = 'user_plan';
    protected $database;
    protected $connection;
    protected $query = "";
    public function __construct()
    {
        //connection
        parent::__construct();
    }
}
