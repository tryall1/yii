<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog_user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $token
 * @property string $email
 */
class BlogUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'auth_key', 'token', 'email'], 'required'],
            [['username', 'password', 'auth_key', 'token', 'email'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'token' => 'Token',
            'email' => 'Email',
        ];
    }
}
