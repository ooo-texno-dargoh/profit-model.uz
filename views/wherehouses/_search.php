<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\WherehousesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wherehouses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'good_id') ?>

    <?= $form->field($model, 'seriya') ?>

    <?= $form->field($model, 'count') ?>

    <?= $form->field($model, 'wherehouse_group_id') ?>

    <?php // echo $form->field($model, 'expiry_date') ?>

    <?php // echo $form->field($model, 'add_date') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'client_id') ?>

    <?php // echo $form->field($model, 'retail_price') ?>

    <?php // echo $form->field($model, 'base_price') ?>

    <?php // echo $form->field($model, 'wholesale_price') ?>

    <?php // echo $form->field($model, 'retail_dallor') ?>

    <?php // echo $form->field($model, 'base_dallor') ?>

    <?php // echo $form->field($model, 'wholesale_dallor') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
