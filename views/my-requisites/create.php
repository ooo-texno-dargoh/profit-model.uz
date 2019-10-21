<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MyRequisites */

$this->title = 'Create My Requisites';
$this->params['breadcrumbs'][] = ['label' => 'My Requisites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-requisites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
