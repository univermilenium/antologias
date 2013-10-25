<?php
error_reporting(0);
/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$options = Yii::app()->params['ldap'];
		
		$connection = ldap_connect($options['host']);
		ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
		ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
		
		if($connection)
		{
			$ldap_user = array();
			foreach($options['ou'] as $op=>$ou){
				foreach($options['o'] as $p=>$o){
					$ldap_user[] = 'cn='.$this->username.',o='.$o.',ou='.$ou.',dc='.$options['dc'][0];
				}
			}
			$i=0;
			do{
				$bind = ldap_bind($connection,$ldap_user[$i],$this->password);
				Yii::app()->getSession()->add('ldap_user',$ldap_user[$i]);
				$i++;
			}while(!$bind && $i<count($ldap_user) );

			if(!$bind) $this->errorCode = self::ERROR_PASSWORD_INVALID;
			else $this->errorCode = self::ERROR_NONE;
		}
		return !$this->errorCode;
		
		
		/**
		* MySQL authentication
		$user = Usuarios::model()->findByAttributes(array('username' => $this->username));
		
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if ($user->check($this->password))
		{
			$this->errorCode=self::ERROR_NONE;
		}
		else
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		return !$this->errorCode;
		
		*/
		
		/**
		* default authentication
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
		**/
	}
}