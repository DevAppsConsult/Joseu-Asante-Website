<?php


class SubscriptionController extends Controller
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


    function checkSubscriptionExpired($user_id)
    {

    }
    
    function requestPayment()
    {

    }

    function confirmPayment()
    {

    }
 
}