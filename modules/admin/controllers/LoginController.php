<?php
/**
 * Created by PhpStorm.
 * User: tryall
 * Date: 07.07.16
 * Time: 10:17
 */
namespace app\modules\admin\controllers;
use Yii;
//use app\models\BlogPost;
//use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\admin\models\LoginForm;
/**
 * PostController implements the CRUD actions for BlogPost model.
 */
class LoginController extends Controller
{
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {
            // return $this->goHome();
            $this->redirect("/admin");
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}