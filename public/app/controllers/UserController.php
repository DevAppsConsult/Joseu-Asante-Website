<?php
namespace App\Controller;

// string password_hash ( string $password , int $algo [, array $options ] )
//bool password_verify ( string $password , string $hash )

use App\Model\Blog;
use App\Model\User;

class UserController extends Controller
{
    protected $response;
    
    function  __construct()
    {
        parent::__construct();

    }

    public function index(int $id = 0)
    {
        $user = new User;
        if($id != 0)
        {
            return $this->response->response(['status'=>200,"data"=>['success'=>'Users retrieved','data'=>$user->first(['id'=>$id])]]);

        }
        else
        {
            return $this->response->response(['status'=>200,"data"=>['success'=>'Users retrieved','data'=>$user->getAll()]]);

        }
    }

    
    function store(array $data)
    {
        $user = new User;
        if(!isset($data['email']))
            return $this->response->response(['status'=>401,"data"=>['error'=>'Sorry email field is required','data'=>null]]);
        if(!isset($data['name']))
            return $this->response->response(['status'=>401,"data"=>['error'=>'Sorry name field is required','data'=>null]]);
        if(!isset($data['password']))
            return $this->response->response(['status'=>401,"data"=>['error'=>'Sorry password field is required','data'=>null]]);
        if(sizeof($user->get(['email'=>$data['email']])) > 0)
        {
            return $this->response->response(['status'=>401,"data"=>['error'=>'Sorry this email address is not available','data'=>null]]);
        }

        $data['password'] = password_hash($data['password']);
        $id = $user->new($data);
        return $this->response->response(['status'=>200,"data"=>['success'=>'User account created','data'=>$id]]);

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