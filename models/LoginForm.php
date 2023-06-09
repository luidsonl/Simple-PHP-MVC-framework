<?php
namespace app\models;
use app\core\Model;
use app\models\User;
use app\core\Application;

class LoginForm extends Model{
    public string $email = '';
    public string $password = '';

    public function rules(): array{
        return[
            'email'				=> [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password'			=> [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array{
        return[
            'email' => 'Your email',
            'password' =>'Password'
        ];
    }

    public function login(){
        $userInstance = new User();
        $user = $userInstance->findOne(['email' => $this->email]);
       //$user = User::findeOne(['email' => $this->email]);
        if(!$user){
            $this->addError('email', 'User does not exist with this email adress');
            return false;
        }
        if(!password_verify($this->password, $user->password)){
            $this->addError('password', 'Incorrect password');
            return false;
        }

        return Application::$app->login($user);
    }

}


?>