<?php
namespace App\Controller;

use App\Model\Blog;

class BlogController extends Controller
{
    public function getAllBogItems()
    {
        $blog = new Blog;
        return $blog->getAll();
    }

    

}