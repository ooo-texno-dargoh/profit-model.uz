<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin([
        'method'=>'post',
//        'action'=>$model->id!==null ? '/qoshimcha/update-user?id='.$model->id : '/qoshimcha/update-user',
]);
//debug($model);
?>

    <div class="form-group bmd-form-group is-focused">

        <label for="add-pic" class="add-pic-label">
            <label class="bmd-label-floating">Avatar</label>
            <img id="blah" src="<?= Yii::$app->homeUrl?>upload/pictures/<?=$model->photo ? $model->photo : 'avatar.jpg'?>" alt="your image" class="add-image"/>
            <?= $form->field($model, 'photo')->fileInput(['onchange'=>'readURL(this)','id'=>'add-pic','accept'=>'image/*'])->label('',['style'=>'display:none']) ?>
<!--                    <input type='file' onchange="readURL(this);" id="add-pic" accept="image/*"/>-->
        </label>
    </div>
<?= Html::hiddenInput('id', $model->id); ?>
<?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'role')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Roles::find()->where(['<>','status',10])->all(),'role','name')) ?>

<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'barcode')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'qrcode')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'status')->dropDownList(['1'=>'Faol','0'=>'Faol emas']) ?>

<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::a('Bekor qilish',['/qoshimcha/ishchi-hodimlar'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
    </div>

<?php ActiveForm::end(); ?>