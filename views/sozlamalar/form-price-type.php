<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PriceType */
/* @var $form yii\widgets\ActiveForm */
?>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percent')->textInput(['type'=>'number']) ?>

    <div class="form-group">
        <?= Html::a('Bekor qilish',['/sozlamalar/sotuv-turlari'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
    </div>


    <?php ActiveForm::end(); ?>

