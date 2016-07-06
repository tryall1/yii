<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public function actionIndex(){
        $this->render('index');
    }
    /**
     * Выставляем права доступа
     */
    /*
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'], //@ - только авторизированным пользователям. ? - только гостям
                    ],
                ],
            ],
        ];
    }


    */


}