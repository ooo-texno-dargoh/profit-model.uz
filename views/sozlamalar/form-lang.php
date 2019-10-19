<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'short')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'status')->dropDownList(['0'=>'Faol emas','1'=>'Faol']) ?>

<div class="form-group">
    <?= Html::a('Bekor qilish',['/sozlamalar/til'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
</div>

<?php ActiveForm::end(); ?>

