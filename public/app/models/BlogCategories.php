<?php
namespace App\Model;

use Config\Database;

class BlogCategories extends Extension
{
    protected $table = 'blog_categories';
    protected $database;
    protected $connection;
    protected $query = "";
    public function __construct()
    {
        //connection
        parent::__construct();
    }
}
