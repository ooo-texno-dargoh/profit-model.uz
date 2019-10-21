<?php

use app\models\search\RegionsSearch;
use yii\helpers\Html; ?>
<div class="main-card card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/qoshimcha/hududlar', 'type' => 'viloyatlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
                <h5 class="header-title"><small>Hudud nomi:</small>  <?=$model->name?></h5>
                <h6> <small>Kodi:</small>  <?=$model->code?></h6>
            </div>
            <div class="col-lg-4">
                <?= Html::a('<i class="fa fa-edit"></i>', ['update-regions', 'id' => $model->id], ['class' => 'btn btn-primary pull-right']) ?>
                <?= Html::a('<i class="fa fa-trash"></i>', ['delete-regions', 'id' => $model->id], [
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
                $searchModel = new \app\models\search\CitytownsSearch();
                $query=\app\models\Citytowns::find()->where(['<>','status',10])->andWhere(['region_id'=>$model->id]);
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                $dataProvider->pagination=['pageSize'=>20];
                $dataProvider=new \yii\data\ActiveDataProvider([
                        'query'=>$query
                ]);
                echo $this->render('citytowns',[
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
                ?>
            </div>
        </div>
    </div>
</div>