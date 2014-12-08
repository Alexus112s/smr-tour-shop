<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $userId
 * @property string $email
 * @property string $name
 * @property string $pasword
 * @property string $authKey
 * @property string $accessToken
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
	
	public function fields() {
		return [ 
				'name',
				'accessToken' 
		];
	}
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'email', 'pasword', 'accessToken'], 'required'],
            [['userId'], 'integer'],
            [['email'], 'string', 'max' => 256],
        	[['name'], 'string', 'max' => 150],
            [['pasword'], 'string', 'max' => 64],
            [['authKey', 'accessToken'], 'string', 'max' => 128],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'email' => 'Email',
            'pasword' => 'Pasword',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        	'name' => 'Name',
        ];
    }
    
    public function validatePassword($pass){
    	return $this->pasword === $pass;
    }
    
    
    public static function findIdentity($id)
    {
    	return static::findOne($id);
    }
    
    public static function findIdentityByAccessToken($token, $type = null)
    {
    	return static::findOne(['accessToken' => $token]);
    }
    
    public function getId()
    {
    	return $this->userId;
    }
    
    public function getAuthKey()
    {
    	return $this->authKey;
    }
    
    public function validateAuthKey($authKey)
    {
    	return $this->authKey === $authKey;
    }
    
    public static function findByEmail($email){
    	return static::findOne(['email' => $email]);
    }
}
