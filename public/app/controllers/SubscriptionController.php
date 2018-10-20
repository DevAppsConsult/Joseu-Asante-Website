<?php

use App\Model\User;
use App\Model\Payment;
use App\Model\Plan;
use App\Model\UserPlan;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    protected $response;
    /**
     * DROP TABLE IF EXISTS `user_plan`;
CREATE TABLE `user_plan` (
  `user_id` int(255) NOT NULL,
  `plan_id` int(2) NOT NULL,
  `start` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `end` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

     */
    public function __construct()
    {
        parent::__construct();
    }

    public function plans()
    {

    }

    public function myPayments()
    {

    }

    public function myPlan()
    {

    }

    public function renewPlan()
    {

    }

    public function upgradePlan()
    {

    }

    public function subscribe()
    {

    }

    public function cancelPlan()
    {

    }

    private function initPayment()
    {

    }

    public function completePayment()
    {

    }

    public function getPayment()
    {

    }

}
