<?php

use app\models\search\RegionsSearch;
use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/sozlamalar/zavod-fabrikalar', 'type' => 'viloyatlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
                <h5 class="header-title"><small>Zavod nomi:</small>  <?=$model->name?></h5>
                <h6> <small>Address: <?=$model->region->name.' '.$model->citytown->name.' '.$model->address?></small> </h6>
            </div>
            <div class="col-lg-4">
                <?= Html::a('<i class="fa fa-edit"></i>', ['update-factories', 'id' => $model->id], ['class' => 'btn btn-primary pull-right']) ?>
                <?= Html::a('<i class="fa fa-trash"></i>', ['delete-factories', 'id' => $model->id], [
                    'class' => 'btn btn-danger pull-right',
                    'style'=>'margin-right:5px',
                    'data' => [
                        'confirm' => 'Haqiqatan ham ushbu ma\'lumotni o\'chirmoqchimisiz?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</div>