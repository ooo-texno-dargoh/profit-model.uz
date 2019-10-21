<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<div class="main-card card">
    <div class="card-body">
        <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/sozlamalar/printerlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
        <h5 class="card-title">Printer qo'shish</h5>
        <?= $this->render('form-printers', [
            'model' => $model,
        ]) ?>
    </div>
</div>