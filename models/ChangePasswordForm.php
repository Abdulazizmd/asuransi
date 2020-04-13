<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class ChangePasswordForm extends Model
{

    public $password;
    public $password_baru;
    public $password_baru_konfirmasi;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // email and password are both required
            [['password', 'password_baru', 'password_baru_konfirmasi'], 'required','message'=>'{attribute} harus diisi'],
            // password is validated by validatePassword()
            ['password_baru_konfirmasi', 'sama'],
        ];
    }

    public function attributeLabels()
    {
        return [
           'password' => 'Password Lama',
       ];
    }    

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function sama($attribute, $params)
    {
        if($this->password_baru != $this->password_baru_konfirmasi)
        {
            $this->addError($attribute, 'Password konfirmasi tidak sesuai');
        }
    }

    public function cocok()
    {

        $user = User::findOne(Yii::$app->user->identity->id);

        if (Yii::$app->getSecurity()->validatePassword($this->password, $user->password)) {
             return true;
        } else {
            $this->addError('password','Password Lama tidak sesuai');
        }

    }

    
}
