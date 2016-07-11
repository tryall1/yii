<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BlogPost */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="blog-post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= $model->content ?>
        <?=($comments!=null) ? $comments[1]->content:'' ?>

    </p>
    <p></p>



</div>
