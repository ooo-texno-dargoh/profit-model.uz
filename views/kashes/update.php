<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kashes */

$this->title = 'Update Kashes: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kashes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
