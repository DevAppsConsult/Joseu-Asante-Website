<?php
namespace App\Model;


class User extends Extension
{

    protected $table = 'users';
    protected $database;
    protected $connection;
    protected $query = "";
    function __construct()
    {
        //connection
        parent::__construct();
    }

 
}