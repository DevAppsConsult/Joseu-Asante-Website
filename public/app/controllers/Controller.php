<?php
namespace App\Controller;

use Config\Response;

class Controller
{
    protected $response;
    function  __construct()
    {
        $this->response = new Response;

    }

}