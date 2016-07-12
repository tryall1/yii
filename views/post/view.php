<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\ListView;


/* @var $this yii\web\View */
/* @var $model app\models\BlogPost */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="blog-post-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div id="row">
        <div class="col-sm-8 blog-main">
        <?= Html::encode($model->content) ?>


    <p>
<h3>Комментарии</h3>
        <?= ListView::widget([
            'dataProvider' => $comments,
            'itemOptions' => ['class' => 'item'],
            'itemView' => function ($comments, $key, $index, $widget) {
                echo Html::tag('p',Html::encode($comments->author));
               echo  Html::tag('p',Html::encode($comments->content));

            },
            /*
            'itemView'=> [
               // ['class' => 'yii\grid\SerialColumn'],

                'id',
                'author',
                'email:email',
                'url:url',
                'content:ntext',
                // 'status',

                ['class' => 'yii\grid\ActionColumn',
                'template'=>''
                ],
            ],*/
        ]); ?>
    </p>
    </div>
    </div>
    <p></p>



</div>
