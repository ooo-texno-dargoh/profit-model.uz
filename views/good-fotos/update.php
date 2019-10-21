<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GoodFotos */

$this->title = 'Update Good Fotos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Good Fotos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="good-fotos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
