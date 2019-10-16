<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<div class="main-card card">
    <div class="card-body">
        <h5 class="card-title">Shablon qo'shish</h5>
        <?= $this->render('form-printer-themes', [
            'model' => $model,
        ]) ?>
    </div>
</div>