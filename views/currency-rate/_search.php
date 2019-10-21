<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\CurrencyRateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="currency-rate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rate') ?>

    <?= $form->field($model, 'datatime') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'klass') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
