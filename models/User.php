<?php

namespace app\models;

use Yii;
use app\models\pegawai;
use app\models\User_role;

use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property integer $role
 * @property string $kode_pegawai
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $email
 * @property string $auth_key
 * @property string $access_token
 *
 * @property Pegawai $kodePegawai
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /*const ROLE_ADMIN = 1;
    const ROLE_PEGAWAI = 2;*/

    public $auth_key;
    public $access_token;

    const ROLE_ADMIN = 1;
    const ROLE_PEGAWAI = 2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user_role', 'username', 'password'], 'required'],
            ['username', 'unique'],
            [['id_user_role', 'id_pegawai'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user_role' => 'Role',
            'id_pegawai' => 'Pegawai',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    public function getRole()
    {
        if ($this->id_user_role === self::ROLE_ADMIN) {
            return 'Admin';
        } else {
            return 'Pegawai';
        }
    }

    public function getUserRole()
    {
        return $this->hasOne(UserRole::className(),['id' => 'id_user_role']);
    }

    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id' => 'id_pegawai']);
    }

    public function getRelationField($relation,$field)
    {
        if(!empty($this->$relation->$field)){
            return $this->$relation->$field;
        }
        else{
            return null;
        }
    }

    public static function isAdmin()
    {
        if(Yii::$app->user->identity->id_user_role == self::ROLE_ADMIN){
            return true;
        } else{
            return false;
        }

        return false;
    }

    public static function isPegawai()
    {
        if(Yii::$app->user->identity->id_user_role == self::ROLE_PEGAWAI){
            return true;
        } else{
            return false;
        }

        return false;
    }


    public static function getIdPegawai()
    {
        if(User::isPegawai())
        {
            return Yii::$app->user->identity->id_pegawai;
        }
    }


    public static function getRoleList()
    {
        return [
            self::ROLE_ADMIN => 'Admin',
            self::ROLE_PEGAWAI => 'Pegawai',
        ];
    }

    public static function getTahun()
    {
        return Yii::$app->session->get('tahun', date('Y'));
    }
}
