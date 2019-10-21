<?php

use app\models\search\FactoriesSearch;
use app\models\search\RegionsSearch;
use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/qoshimcha/hududlar', 'type' => 'tumanlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
                <h5 class="header-title"><small>Hudud nomi:</small>  <?=$model->name?></h5>
                <h6> <small>Viloyat:</small>  <?=$model->region->name?></h6>
                <h6> <small>Kodi:</small>  <?=$model->code?></h6>
            </div>
            <div class="col-lg-4">
                <?= Html::a('<i class="fa fa-edit"></i>', ['update-citytowns', 'id' => $model->id], ['class' => 'btn btn-primary pull-right']) ?>
                <?= Html::a('<i class="fa fa-trash"></i>', ['delete-citytowns', 'id' => $model->id], [
                    'class' => 'btn btn-danger pull-right',
                    'style'=>'margin-right:5px',
                    'data' => [
                        'confirm' => 'Haqiqatan ham ushbu ma\'lumotni o\'chirmoqchimisiz?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="col-lg-12">
                <?php
                $searchModel = new FactoriesSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                $dataProvider->pagination=['pageSize'=>20];
                $dataProvider=new \yii\data\ActiveDataProvider([
                        'query'=>\app\models\Factories::find()->where(['<>','status',10])->andWhere(['citytown_id'=>$model->id]),
                ]);
                echo $this->render('/sozlamalar/zavod-fabrikalar', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
                ?>
            </div>
        </div>
    </div>
</div>