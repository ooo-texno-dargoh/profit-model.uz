<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\OrdersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'datetime') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'client_id') ?>

    <?= $form->field($model, 'kash_id') ?>

    <?php // echo $form->field($model, 'total_sum') ?>

    <?php // echo $form->field($model, 'nds') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'order_type_id') ?>

    <?php // echo $form->field($model, 'good_types_count') ?>

    <?php // echo $form->field($model, 'goods_count') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
