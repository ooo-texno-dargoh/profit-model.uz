<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<?php $form = ActiveForm::begin(); ?>

<?php

?>
<div class="row">
    <div class="col-lg-6">
        <?=$form->field($name_def,'name')->textInput(['name'=>'name_def','placeholder'=>$name_def->lang->name])?>
    </div>
    <div class="col-6">
        <br>
        <a class="btn btn-success" style="margin-top: 7px" onclick="$('#target1').toggle();">
            <i class="fa fa-plus-square"></i>
        </a>
    </div>
</div>
    <div class="row" id="target1" style="display:none;">
        <div class="col-lg-6">
            <?=$form->field($name1,'name')->textInput(['name'=>'name1','placeholder'=>$name1->lang->name])->label(false)?>
        </div>
        <div class="col-6">
            <a class="btn btn-success" onclick="$('#target2').toggle();">
                <i class="fa fa-plus-square"></i>
            </a>
        </div>
    </div>
    <div class="row" id="target2" style="display:none;">
        <div class="col-lg-6">
            <?=$form->field($name2,'name')->textInput(['name'=>'name2','placeholder'=>$name2->lang->name])->label(false)?>
        </div>
        <div class="col-6">
            <a class="btn btn-success" onclick="$('#target3').toggle();">
                <i class="fa fa-plus-square"></i>
            </a>
        </div>
    </div>
    <div class="row" id="target3" style="display:none;">
        <div class="col-lg-6">
            <?=$form->field($name3,'name')->textInput(['name'=>'name3','placeholder'=>$name3->lang->name])->label(false)?>
        </div>
    </div>


<?//=$form->field($name2,'name')->textInput(['name'=>'name2'])?>
<!---->
<?//=$form->field($name3,'name')->textInput(['name'=>'name3'])?>

<?= $form->field($model, 'code')->textInput() ?>


<div class="form-group">
    <?= Html::a('Bekor qilish',['/qoshimcha/hududlar','type'=>'viloyatlar'],['class'=>'btn btn-danger pull-right','style'=>'margin-left:5px']) ?>
    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success pull-right']) ?>
</div>

<?php ActiveForm::end(); ?>