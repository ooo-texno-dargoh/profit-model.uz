<?php

use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/qoshimcha/hududlar', 'type' => 'viloyatlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
        <h5 class="header-title"><small>Yangilash:</small> <?=$model->name?></h5>

        <?= $this->render('form-region', [
            'model' => $model,
        ]) ?>
    </div>
</div>