<?php

use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/qoshimcha/ishchi-hodimlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
        <h5 class="card-title">Ishchi qo'shish</h5>

        <?= $this->render('form-user', [
            'model' => $model,
        ]) ?>
    </div>
</div>