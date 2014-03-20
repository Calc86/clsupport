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

    public function authenticate(){
        $user = null;
        if(is_numeric($this->username[0])){
            return $this->authByAgent();
        }
        else{
            return $this->authByUser($user);
        }
    }
    public function authByAgent(){
        $agent = Agents::model()->findByAttributes(array('agent'=>$this->username));
        if($agent === null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($agent->pin != $this->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else{
            $user = User::model()->findByAttributes(array('agent'=>$agent->agent));
            if($user === null)
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            else{
                $this->setVars($user);
                $this->errorCode = self::ERROR_NONE;
            }
        }
        return !$this->errorCode;
    }

    public function getId(){
        return $this->id;
    }

    /**
     * @return bool
     */
    public function authByUser()
    {
        $user = User::model()->findByAttributes(array('username'=>$this->username));

        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($user->passwd !== crypt($this->password, $user->passwd))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->setVars($user);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    /**
     * @param $user
     */
    public function setVars($user)
    {
        $this->id = $user->id;
        $this->setState('title', $user->username);
        $this->setState('name', $user->username);
    }
}