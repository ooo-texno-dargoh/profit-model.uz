<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\SoldGoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sold-goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'good_id') ?>

    <?= $form->field($model, 'count') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'unit_type_id') ?>

    <?php // echo $form->field($model, 'wherehouse_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
