<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\DiscountsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discounts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'begin') ?>

    <?= $form->field($model, 'end') ?>

    <?= $form->field($model, 'good_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'parcent') ?>

    <?php // echo $form->field($model, 'sum') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'free_good_id') ?>

    <?php // echo $form->field($model, 'free_good_cnt') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
