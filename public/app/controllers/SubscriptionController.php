<?php
namespace App\Controller;
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
     * 
CREATE TABLE `user_plan` (
  `user_id` int(255) NOT NULL,
  `plan_id` int(2) NOT NULL,
  `start` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `end` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `plan_id` int(2) NOT NULL,
  `amount` double(12,2) NOT NULL,
  `status` enum('Pending','Cancelled','Failed','Completed') NOT NULL DEFAULT 'Pending',
  `trans_code` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `external_trans_id` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `external_trans_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double(12,2) NOT NULL,
  `months` int(2) NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `status` enum('Active','Suspended') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

     */
    public function __construct()
    {
        parent::__construct();
    }

    public function plans()
    {
        return $this->response->response(['status'=>200,"data"=>['success'=>'Users retrieved','data'=>Plan::getAll()]]);
    }

    public function myPayments($id)
    {
        //$_SESSION['user_id']
  
            $payment = new Payment;
            $payments = $payment->get(['user_id'=>$id]);
            return $this->response->response(['status'=>200,"data"=>['success'=>'User payments retrieved','data'=>$payments]]);    
        return $this->response->response(['status'=>404,"data"=>['error'=>'Payments not found','data'=>null]]);    

    }

    public function myPlan($user_id)
    {
        
            $payment = new UserPlan;
            $payments = $payment->first(['user_id'=>$user_id]);
            //return $this->response->response(['status'=>206,"data"=>['error'=>'Plan not found 3','data'=>$user_id]]);    

            if($payments)
            {
                $plan = new Plan;
                $_plan = $plan->first(['id'=>$payments['plan_id']]);
                if($_plan)
                    $payments['plan'] = $_plan;
                $date = Carbon::parse($payments['end'], 'UTC');
                    $payments['status'] ='Expired';
                    $payments['expires'] = $date->format('D, d M Y, h:m:s a');

                    if($date->isFuture())
                    $payments['status'] ='Active';
                return $this->response->response(['status'=>200,"data"=>['success'=>'User plan retrieved','data'=>$payments]]);        
            }
            return $this->response->response(['status'=>206,"data"=>['error'=>'Plan not found 2','data'=>null]]);    
        
    }

    public function renewPlan()
    {
        if(isset($_SESSION) && isset($_SESSION['user_id']))
        {
            $payment = new UserPlan;
            $payments = $payment->first(['user_id'=>$_SESSION['user_id']]);
            if($payments)
            {
                $paymentResponse = self::initPayment($payments);
                return $this->response->response(['status'=>200,"data"=>['success'=>'Payment request generated','data'=>$paymentResponse]]);    
            }
            return $this->response->response(['status'=>404,"data"=>['error'=>'Plan not found','data'=>null]]);    
        }
        return $this->response->response(['status'=>404,"data"=>['error'=>'Plan not found','data'=>null]]);    
    }

    public function upgradePlan(int $planId)
    {
        if(isset($_SESSION) && isset($_SESSION['user_id']))
        {
            $payment = new UserPlan;
            $payments = $payment->first(['user_id'=>$_SESSION['user_id']]);
            if($payments)
            {
                $payment = new UserPlan;
                $details = $payment->update(['user_id'=>$_SESSION['user_id']], ['plan_id'=>$planId]);
                $payment = new UserPlan;
                $payments = $payment->first(['user_id'=>$_SESSION['user_id']]);
                $paymentResponse = self::initPayment($payments);
                return $this->response->response(['status'=>200,"data"=>['success'=>'Payment request generated','data'=>$paymentResponse]]);    
            }
            return $this->response->response(['status'=>404,"data"=>['error'=>'Plan not found','data'=>null]]);    
        }
        return $this->response->response(['status'=>404,"data"=>['error'=>'Plan not found','data'=>null]]);    
    }

    public function subscribe(int $planId)
    {
        if(isset($_SESSION) && isset($_SESSION['user_id']))
        {
            $payment = new UserPlan;
            $payments = $payment->first(['user_id'=>$_SESSION['user_id']]);
            if($payments)
            {
                $payment = new UserPlan;
                $details = $payment->update(['user_id'=>$_SESSION['user_id']], ['plan_id'=>$planId]);
                $payment = new UserPlan;
                $payments = $payment->first(['user_id'=>$_SESSION['user_id']]);
                $paymentResponse = self::initPayment($payments);
                return $this->response->response(['status'=>200,"data"=>['success'=>'Payment request generated','data'=>$paymentResponse]]);    
            }
            $plan = new Plan;
            $_plan = $plan->first(['id'=>$planId]);
            $payment = new UserPlan;            
            $data = array();
            $data['user_id'] =  $_SESSION['user_id'];
            $data['plan_id'] =  $planId;
            $data['start'] = Carbon::now()->toDateTimeString();
            $data['end'] = Carbon::now()->toDateTimeString();
            $details = $payment->new($data);
            $payment = new UserPlan;
            $payments = $payment->first(['user_id'=>$_SESSION['user_id']]);
            $paymentResponse = self::initPayment($payments);
            return $this->response->response(['status'=>200,"data"=>['success'=>'Payment request generated','data'=>$paymentResponse]]);    
        }
        return $this->response->response(['status'=>404,"data"=>['error'=>'Plan not found','data'=>null]]);    
    }

    public function cancelPlan()
    {

    }

    private function initPayment(array $userPlan)
    {
        $payment = new Payment;
        $plan = new Plan;
        $_plan = $plan->first(['id'=>$userPlan['plan_id']]);
        
        $amount = $_plan['price'];
        $data = [];
        $_trans_code = time().'-'.$userPlan['user_id'].'-'.$userPlan['plan_id'];
        $data['user_id'] = $userPlan['user_id'];
        $data['plan_id'] = $userPlan['plan_id'];
        $data['amount'] = $amount;
        $data['trans_code'] = $_trans_code;
        $data['external_trans_id'] = "" ;
        $data['external_trans_code'] = "" ;
        $data['created_at'] = Carbon::now()->toDateTimeString(); 
        $payment->new($data);
        return $_trans_code.'|'.$amount;
    }

    public function completePayment(array $trans)
    {
        if(isset($trans['txRef']) && isset($trans['status']))
        {
            $payment = new Payment;
           if($trans['status'] == "successful")
           {
                $payment->update(['trans_code'=>$trans['txRef']], ['status'=>'Completed','updated_at'=>Carbon::now()->toDateTimeString(),'external_trans_id'=>$trans['id'],'external_trans_code'=>$trans['flwRef']]);
                $payment = new Payment;
                $trans = $payment->first(['trans_code'=>$trans['txRef']]);
                //lets get the userplan
                $userPlan = new UserPlan;
                $_plan = $userPlan->first(['user_id'=>$trans['user_id'],'plan_id'=>$trans['plan_id']]);
                $mainPlan = new Plan;
                $myPlan = $mainPlan->first(['id'=>$trans['plan_id']]);
                $data= [];
                $data['end'] = Carbon::parse($_plan['end'])->addMonths($myPlan['plans'])->toDateTimeString();
                $userPlan = new UserPlan;
                $userPlan->update(['user_id'=>$trans['user_id'],'plan_id'=>$trans['plan_id']],$data);
           }
           else
           {
                $payment->update(['trans_code'=>$trans['txRef']], ['updated_at'=>Carbon::now()->toDateTimeString(),'external_trans_id'=>$trans['id'],'external_trans_code'=>$trans['flwRef']]);
           }
        return $this->response->response(['status'=>200,"data"=>['success'=>'Done','data'=>null]]);    

        }
        return $this->response->response(['status'=>300,"data"=>['error'=>'Error','data'=>null]]);    

    }

    public function getPayments()
    {

    }

}
