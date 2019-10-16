<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<div class="main-card card">
    <div class="card-body">
        <h5 class="card-title">Yangilash: <?=$model->name?></h5>
        <?= $this->render('form-printers', [
            'model' => $model,
        ]) ?>
    </div>
</div>