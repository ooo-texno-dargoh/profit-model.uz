<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'role')->textInput(['type'=>'number']) ?>

<div class="form-group">
    <?= Html::a('Bekor qilish',['/qoshimcha/lavozimlar'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
</div>

<?php ActiveForm::end(); ?>