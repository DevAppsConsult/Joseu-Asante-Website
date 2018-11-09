<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__."/startup.php";

use \App\Controller\UserController;
use \App\Controller\BlogController;
use \App\Controller\SubscriptionController;
use \App\Module\Subscription;
use \Config\Response;

$url_array = explode('/', $_SERVER['REQUEST_URI']);
array_shift($url_array); // remove first value as it's empty
array_shift($url_array); // remove first value as it's empty
array_shift($url_array); // remove first value as it's empty
$action = $url_array[0];
// get the method
$method = $_SERVER['REQUEST_METHOD'];
$response = new Response;

if ($action === 'trans') {

    if ($method=='POST') {
        $user = new SubscriptionController;
        $json = file_get_contents('php://input');
        $post = json_decode($json, true);
        if (is_array($post)) {
            return $user->completePayment($post);
        }
        $response->response(
            [
                'status'=>206,
                "data"=>['error'=>'Sorry wrong parameters']
                ]
        );

    }
}else
if ($action === 'user') {
    $user = new UserController;
    if ($method=='POST') {
        if (!isset($url_array[1])) {
            $json = file_get_contents('php://input');
            $post = json_decode($json, true);
            if (is_array($post)) {
                return $user->store($post);
            }
            $response->response(
                [
                    'status'=>206,
                    "data"=>['error'=>'Sorry wrong parameters']
                    ]
            );
        } else {
            if ($url_array[1] === "register") {
                $json = file_get_contents('php://input');
                $post = json_decode($json, true);
                if (is_array($post)) {
                    return $user->store($post);
                }
                $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters']]);
            }
            if ($url_array[1] === "login") {
                $json = file_get_contents('php://input');
                $post = json_decode($json, true);
                if (is_array($post)) {
                    return $user->login($post);
                }
                $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters']]);
            }
            if ($url_array[1] === "update") {
                $json = file_get_contents('php://input');
                $post = json_decode($json, true);
                if (is_array($post)) {
                    return $user->update($post);
                }
                $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters']]);
            }

            if ($url_array[1] === 'activate') {
                $json = file_get_contents('php://input');
                $post = json_decode($json, true);
                if (is_array($post)) {
                    return $user->activate($post);
                }
                $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters']]);
            }
            if ($url_array[1] === 'request-code') {
                $json = file_get_contents('php://input');
                $post = json_decode($json,true);
                if (is_array($post)) {
                    return $user->forgotPassword($post['email']);
                }
                $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters','dd'=>$post]]);
            }
            if ($url_array[1] === 'set-password-forgot-code') {
                $json = file_get_contents('php://input');
                $post = json_decode($json, true);
                if (is_array($post)) {
                    return $user->setForgotPassword($post);
                }
                $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters']]);
            }
        }
    } elseif ($method=='GET') {
        $user = new SubscriptionController;

        if ($url_array[1] === "payments") {
            return $user->myPayments($url_array[2]);
        }

        if ($url_array[1] === "is-my-book") {
            return $user->isMyBook($url_array[2],$url_array[3]);
        }

        if ($url_array[1] === "my-books") {
            return $user->myBooks($url_array[2]);
        }

        if ($url_array[1] === "all-plans") {
            return $user->getPlans();
        }

        if ($url_array[1] === "plan") {
            return $user->myPlan($url_array[2]);
        }
        if ($url_array[1] === "renew-plan") {
            return $user->renewPlan();
        }
        if ($url_array[1] === "upgrade-plan") {
            return $user->upgradePlan($url_array[2]);
        }
        if ($url_array[1] === "subscribe-plan") {
            return $user->subscribe($url_array[2]);
        }
    
        
    }
}

// Set default HTTP response of 'Not Found'
$response->response(['status'=>404,"data"=>['error'=>'Sorry the endpoint you are looking for could not be found']]);
