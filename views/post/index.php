<?php

use yii\helpers\Html;
use yii\helpers\CutTextHelper;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            echo Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);
            echo Html::tag("p", Html::encode(CutTextHelper::Cut($model->content)).Html::a(" читать далее...", ['view', 'id' => $model->id]));
            //echo Html::a("...", ['view', 'id' => $model->id]);
        },
    ]) ?>
</div>
