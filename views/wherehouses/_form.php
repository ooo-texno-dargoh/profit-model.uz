<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wherehouses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wherehouses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'good_id')->textInput() ?>

    <?= $form->field($model, 'seriya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'wherehouse_group_id')->textInput() ?>

    <?= $form->field($model, 'expiry_date')->textInput() ?>

    <?= $form->field($model, 'add_date')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'client_id')->textInput() ?>

    <?= $form->field($model, 'retail_price')->textInput() ?>

    <?= $form->field($model, 'base_price')->textInput() ?>

    <?= $form->field($model, 'wholesale_price')->textInput() ?>

    <?= $form->field($model, 'retail_dallor')->textInput() ?>

    <?= $form->field($model, 'base_dallor')->textInput() ?>

    <?= $form->field($model, 'wholesale_dallor')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
