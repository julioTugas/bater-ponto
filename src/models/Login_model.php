<?php
//require_once(realpath(MODEL_PATH . '/User.php'));
//Ou
loadModel('User');

class Login_model extends Model {
   
    public function checkLogin(){
        $user = User::getOne(['email' => $this->email]);
        if($user){
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new exception();
    }
}