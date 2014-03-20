<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

//    public function authenticate(){
//        $user = User::model()->findByAttributes(array('username'=>$this->username));
//        if($user === null)
//            $this->errorCode=self::ERROR_USERNAME_INVALID;
//        else if($user->passwd!==crypt($this->password,$user->passwd))
//            $this->errorCode=self::ERROR_PASSWORD_INVALID;
//        else{
//            $this->id=$user->id;
//            $this->setState('title', $user->username);
//            $this->errorCode=self::ERROR_NONE;
//        }
//        return !$this->errorCode;
//    }
    public function authenticate(){
        $user = Agents::model()->findByAttributes(array('agent'=>$this->username));
        if($user === null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($user->pin != $this->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else{
            $this->id=$user->agent;
            $this->setState('title', $user->name);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId(){
        return $this->id;
    }
}