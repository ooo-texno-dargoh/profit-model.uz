<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CurrencyRate */

$this->title = 'Update Currency Rate: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Currency Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="currency-rate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
