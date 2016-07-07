<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog_comment}}".
 *
 * @property integer $id
 * @property string $author
 * @property string $email
 * @property string $url
 * @property string $content
 * @property integer $status
 */
class BlogComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'email', 'url', 'content', 'status'], 'required'],
            [['content'], 'string'],
            [['status'], 'integer'],
            [['author', 'email', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'email' => 'Email',
            'url' => 'Url',
            'content' => 'Content',
            'status' => 'Status',
        ];
    }
}
