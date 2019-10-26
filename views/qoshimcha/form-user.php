<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin();
//debug($model);
?>
    <label for="add-pic" class="add-pic-label" style="max-height: 200px">
        Rasm <br>
        <img id="blah" class="rounded-circle mx-auto d-block" style="height: 130px;width: 130px" src="<?= Yii::$app->homeUrl?>upload/pictures/<?=$model->photo ? $model->photo : 'avatar.jpg'?>" alt="your image" />
        <?= $form->field($model, 'photo')->fileInput(['onchange'=>'readURL(this)','id'=>'add-pic','accept'=>'image/*'])->label('',['style'=>'display:none']) ?>
<!--                <input type='file' onchange="readURL(this);" id="add-pic" accept="image/*"/>-->
    </label>
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
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
