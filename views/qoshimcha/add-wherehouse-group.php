<?php

use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/qoshimcha/omborlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
        <h5 class="card-title">Ombor qo'shish</h5>

        <?= $this->render('form-wherehouse-group', [
            'model' => $model,
        ]) ?>
    </div>
</div>