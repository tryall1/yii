<?php
/**
 * Created by PhpStorm.
 * User: tryall
 * Date: 07.07.16
 * Time: 21:40
 */
namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Default controller for the `admin` module
 */
class BaseController extends Controller
{
    public function behaviors(){
        return[
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['post'],
                'rules' => [
                    [
                        //'controllers'=>['post', 'default'],
                        'actions' => ['logout', 'create', 'update', 'delete', 'post', 'index'],
                        'allow' => true,
                        'roles' => ['@'], //@ - только авторизированным пользователям. ? - только гостям
                    ],
                ],
            ],
        ];
    }
}