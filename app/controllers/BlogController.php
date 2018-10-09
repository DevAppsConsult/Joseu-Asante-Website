<?php
namespace App\Controller;

use App\Model\Blog;
class BlogController
{
    protected $table = 'blogs';

    public function getAllBogItems()
    {
        $blog = new Blog;
        return $blog->getAll();
    }

    

}