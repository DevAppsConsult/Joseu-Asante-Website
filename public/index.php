<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once (__DIR__."/startup.php");

use \App\Controller\UserController;
use \App\Controller\BlogController;
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


if( $action === 'user'){
    $user = new UserController;
	if($method=='POST'){
        if(!isset($url_array[1]))
        {
            $json = file_get_contents('php://input');
            $post = json_decode($json,true); 
            if(is_array($post))
            {
                return $user->store($post);                  
            }
            $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters']]);
        }
        else
        {
            if($url_array[1] === "register")
            {
                $json = file_get_contents('php://input');
                $post = json_decode($json,true); 
                if(is_array($post))
                {
                    return $user->store($post);                  
                }
                $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters']]);    
            }
            if($url_array[1] === "login")
            {
                $json = file_get_contents('php://input');
                $post = json_decode($json,true); 
                if(is_array($post))
                {
                    return $user->login($post);                  
                }
                $response->response(['status'=>206,"data"=>['error'=>'Sorry wrong parameters']]);    

            }
            if($url_array[1] === 'activate')
            {

            }
            if($url_array[1] === 'request-code')
            {

            }
            if($url_array[1] === 'set-password-forgot-code')
            {

            }
        }
    
    }
    elseif($method=='GET'){
       if(!isset($url_array[1])){ // if parameter id recipe does not exist
                           
            return $user->index();
		}else{             
			$user_id=intval($url_array[1]);
            return $user->index($user_id);
		}

    }
}

// Set default HTTP response of 'Not Found'
$response->response(['status'=>404,"data"=>['error'=>'Sorry the endpoint you are looking for could not be found']]);

