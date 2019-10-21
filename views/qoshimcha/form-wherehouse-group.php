<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>


<div class="form-group">
    <?= Html::a('Bekor qilish',['/qoshimcha/omborlar'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
</div>

<?php ActiveForm::end(); ?>