<?php


class SubscriptionController extends Controller
{
    protected $table = 'users';
    protected $database;
    protected $connection;
    protected $query = "";
    public function __construct()
    {
        //connection
        parent::__construct();
    }


    public function checkSubscriptionExpired($user_id)
    {
    }
    
    public function requestPayment()
    {
    }

    public function confirmPayment()
    {
    }
}
