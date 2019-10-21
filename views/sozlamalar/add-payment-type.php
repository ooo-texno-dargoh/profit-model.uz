<?php

use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/sozlamalar/tolov-turlari'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
        <h5 class="card-title">To'lov turini qo'shish</h5>

        <?= $this->render('form-payment-type', [
            'model' => $model,
        ]) ?>
    </div>
</div>