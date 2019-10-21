<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin(); ?>

<?php

?>
<div class="row">
    <div class="col-lg-6">
        <?=$form->field($model,'region_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Regions::find()->where(['<>','status',10])->all(),'id','name'))?>
        <?=$form->field($model,'name')->textInput(['placeholder'=>$model->getAttributeLabel('name')])?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'code')->textInput() ?>
    </div>
</div>


<div class="form-group">
    <?= Html::a('Bekor qilish',['/qoshimcha/hududlar','type'=>'viloyatlar'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
</div>

<?php ActiveForm::end(); ?>