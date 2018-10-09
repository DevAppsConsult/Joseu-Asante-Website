<?php
namespace App\Controller;

// string password_hash ( string $password , int $algo [, array $options ] )
//bool password_verify ( string $password , string $hash )

use App\Model\Blog;
use App\Model\User;
class UserController
{

    public function getAllBogItems()
    {
        $blog = new Blog;
        return $blog->getAll();
    }

    
    function store(array $data)
    {

    }

    function activate(array $data)
    {

    }
    function forgotPassword(string $email)
    {

    }
    function setForgotPassword(array $data)
    {

    }

    function changePassword( array $data)
    {

    }

    function login(array $data)
    {

    }

    

}