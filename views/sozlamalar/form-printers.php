<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'ip')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'port')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'host')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>
<div class="form-group">
    <?= Html::a('Bekor qilish',['/sozlamalar/printerlar'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
</div>

<?php ActiveForm::end(); ?>

