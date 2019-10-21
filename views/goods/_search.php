<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\GoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'shortname') ?>

    <?= $form->field($model, 'body') ?>

    <?= $form->field($model, 'photo1') ?>

    <?php // echo $form->field($model, 'photo2') ?>

    <?php // echo $form->field($model, 'photo3') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'unit_type_id') ?>

    <?php // echo $form->field($model, 'count_in_case') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'brend_id') ?>

    <?php // echo $form->field($model, 'factory_id') ?>

    <?php // echo $form->field($model, 'min_count') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'data_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
