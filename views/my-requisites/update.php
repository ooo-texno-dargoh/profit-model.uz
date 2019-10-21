<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MyRequisites */

$this->title = 'Update My Requisites: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'My Requisites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="my-requisites-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
