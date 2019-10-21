<?php

use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/qoshimcha/hududlar', 'type' => 'tumanlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
        <h5 class="card-title">Tuman shaxar qo'shish</h5>

        <?= $this->render('form-citytowns', [
            'model' => $model,
        ]) ?>
    </div>
</div>