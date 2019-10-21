<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'director')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'mfo')->textInput() ?>

<?= $form->field($model, 'qrcode')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'oked')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'landmark')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>



<div class="form-group">
    <?= Html::a('Bekor qilish',['/sozlamalar/korxona-haqida'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
</div>

<?php ActiveForm::end(); ?>
