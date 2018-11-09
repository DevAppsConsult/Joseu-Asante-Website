<?php
namespace App\Model;

use Config\Database;

class UserBookSubscription extends Extension
{
    protected $table = 'user_plan_subscribed_books';
    protected $database;
    protected $connection;
    protected $query = "";
    public function __construct()
    {
        //connection
        parent::__construct();
    }
}
