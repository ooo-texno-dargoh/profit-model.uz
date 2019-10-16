<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'printer_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Printers::find()->where(['status'=>'1'])->all(),'id','name')) ?>

<?= $form->field($model, 'theme')->textarea(['rows' => 6]) ?>


<div class="form-group">
    <?= Html::a('Bekor qilish',['../'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
</div>

<?php ActiveForm::end(); ?>

