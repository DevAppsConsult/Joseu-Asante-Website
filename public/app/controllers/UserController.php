<?php
namespace App\Controller;

// string password_hash ( string $password , int $algo [, array $options ] )
//bool password_verify ( string $password , string $hash )

use App\Model\Blog;
use App\Model\User;
use Carbon\Carbon;

class UserController extends Controller
{
    protected $response;
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index(int $id = 0)
    {
        $user = new User;
        if ($id != 0) {
            return $this->response->response(['status'=>200,"data"=>['success'=>'Users retrieved','data'=>$user->first(['id'=>$id])]]);
        } else {
            return $this->response->response(['status'=>200,"data"=>['success'=>'Users retrieved','data'=>$user->getAll()]]);
        }
    }

    
    public function store(array $data)
    {
        $user = new User;
        if (!isset($data['email'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry email field is required','data'=>null]]);
        }
        if (!isset($data['name'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry name field is required','data'=>null]]);
        }
        if (!isset($data['password'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry password field is required','data'=>null]]);
        }
        if (sizeof($user->get(['email'=>$data['email']])) > 0) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry this email address is not available','data'=>null]]);
        }
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $data['activation_code'] = self::generateVerifyCode();
        $id = $user->new($data);
        $this->sendMail("Welcome to our website", "Hello ".$data['name']." <br/> Welcome to our website kindly find below your account activation code <br/> <strong>".$data['activation_code']."</strong>", $data['email'], $data['name']);
        return $this->response->response(['status'=>200,"data"=>['success'=>'User account created','data'=>$id]]);
    }

    public function activate(array $data)
    {
        $user = new User;
        if (!isset($data['email'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry email field is required','data'=>null]]);
        }
        if (!isset($data['activation_code'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry activation code field is required','data'=>null]]);
        }
        $_details = $user->get(['email'=>$data['email'],'activation_code'=>$data['activation_code'],'status'=>'Pending']);
        if (sizeof($_details) == 0) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry wrong account details','data'=>null]]);
        }
        //lets do activation
        $details = $user->update(['email'=>$data['email'],'activation_code'=>$data['activation_code']], ['status'=>'Active','activation_code'=>null]);
        $_SESSION['user'] = $_details[0];
        $_SESSION['user_id'] =  $_details[0]['id'];
        return $this->response->response(['status'=>200,"data"=>['success'=>'User account activated','data'=>$_details]]);
    }
    public function forgotPassword(string $email)
    {
        $data = array();
        $user = new User;
        $_details = $user->get(['email'=>$email,'status'=>'Active']);
        if (sizeof($_details) == 0) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry wrong account details','data'=>null]]);
        }
        $data['forgot_code'] = self::generateVerifyCode();

        //lets do activation
        $details = $user->update(['email'=>$email], ['forgot_code'=>$data['forgot_code']]);
        $this->sendMail("Welcome to our website", "Hello ".$_details['name']." <br/> A password reset code has been generated for you Kindly find it below <br/> <strong>".$data['forgot_code']."</strong>", $email, $_details['name']);

        return $this->response->response(['status'=>200,"data"=>['success'=>'User forgot code sent','data'=>$_details]]);
    }
    public function setForgotPassword(array $data)
    {
        $user = new User;
        if (!isset($data['email'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry email field is required','data'=>null]]);
        }
        if (!isset($data['forgot_code'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry forgot code field is required','data'=>null]]);
        }
        if (!isset($data['password'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry password field is required','data'=>null]]);
        }

        $_details = $user->get(['email'=>$data['email'],'forgot_code'=>$data['forgot_code'],'status'=>'Active']);
        if (sizeof($_details) == 0) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry wrong account details','data'=>null]]);
        }
        //lets do activation
        $details = $user->update(['email'=>$data['email'],'forgot_code'=>$data['forgot_code']], ['password'=>password_hash($data['password'], PASSWORD_BCRYPT)]);

        return $this->response->response(['status'=>200,"data"=>['success'=>'User account password updated','data'=>$_details]]);
    }

    public function changePassword(array $data)
    {
    }

    public function login(array $data)
    {
        $user = new User;
        if (!isset($data['email'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry email field is required','data'=>null]]);
        }
        if (!isset($data['password'])) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry password field is required','data'=>null]]);
        }
        $details = $user->get(['email'=>$data['email'],'status'=>'Active']);
        if (sizeof($details) == 0) {
            return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry wrong account details','data'=>null]]);
        }
        $_user = $user->first(['email'=>$data['email']]);

        // bool password_verify ( string $password , string $hash )
        if (password_verify($data['password'], $_user['password'])) {
            $_SESSION['user'] = $_user;
            $_SESSION['user_id'] =  $_user['id'];
    
            return $this->response->response(['status'=>200,"data"=>['success'=>'User login','data'=>$_user]]);
        }
        return $this->response->response(['status'=>206,"data"=>['error'=>'Sorry wrong account details','data'=>null]]);
    }

    public function generateVerifyCode()
    {
        $alphabets = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $numbersLength = strlen($numbers);
        $alphabetsLength = strlen($alphabets);
        $randomString = '';
        for ($i = 0; $i < 3; $i++) {
            $randomString .= $numbers[rand(0, $numbersLength - 1)];
            $randomString .= $alphabets[rand(0, $alphabetsLength - 1)];
        }
        $user = new User;
        if (sizeof($user->get(['activation_code'=>$randomString])) == 0) {
            return $randomString;
        }
        self::generateVerifyCode();
    }
}
