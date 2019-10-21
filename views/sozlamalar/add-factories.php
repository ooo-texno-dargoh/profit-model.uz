<?php

use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/sozlamalar/zavod-fabrikalar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
        <h5 class="card-title">Zavod qo'shish</h5>

        <?= $this->render('form-factories', [
            'model' => $model,
        ]) ?>
    </div>
</div>