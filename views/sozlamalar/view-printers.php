<?php
//debug($model);
use app\models\PrinterThemes;
use app\models\search\PrinterThemesSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\DetailView; ?>

<div class="row">
    <div class="col-lg-6">
        <h5 class="card-title"><?=$model->name?></h5>
        <div class="main-card card">
            <div class="card-body">
                <p>
                    <?= Html::a('<i class="fa fa-arrow-left"></i>', ['/sozlamalar/printerlar'], ['class' => 'border-0 btn-transition btn btn-outline-success']) ?>
                    <?= Html::a('<i class="fa fa-edit"></i>', ['update-printers', 'id' => $model->id], ['class' => 'btn btn-primary pull-right']) ?>
                    <?= Html::a('<i class="fa fa-trash"></i>', ['delete-printers', 'id' => $model->id], [
                            'class' => 'btn btn-danger pull-right',
                            'data' => [
                                'confirm' => 'Haqiqatan ham ushbu ma\'lumotni o\'chirmoqchimisiz?',
                                'method' => 'post',
                                ],
                    ]) ?>
                </p>
                <?= DetailView::widget([
                        'model' => $model,

                        'attributes' => [
            //                'id',
                            'name',
                            'ip',
                            'port',
                            'host',
                            [
                                'attribute'=>'status',
                                'filter'=>['1'=>'Faol','0'=>'Faol emas'],
                                'value'=>function($x){
                                    if($x->status)
                                        return Html::a(Yii::t('app', '<span class="fa fa-check"></span>  '), ['/sozlamalar/change-status-printer','id'=>$x->id], [
                                            'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-success',
                                            'data' => [
                                                'confirm' => Yii::t('app', 'Tasdiqlaysizmi?'),
                                            ],
                                        ]);
                                    return Html::a(Yii::t('app', '<span class="fa fa-exclamation"></span>  '), ['/sozlamalar/change-status-printer','id'=>$x->id], [
                                        'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-danger',
                                        'data' => [
                                            'confirm' => Yii::t('app', 'Tasdiqlaysizmi?'),
                                        ],
                                    ]);
                                },
                                'format'=>'raw',
                            ],
                        ],
                ]) ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <h5 class="card-title">Ta'rif</h5>
        <div class="main-card card">
            <div class="card-body">
                <p><?=$model->note?></p>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-card card">
            <div class="card-body">
                <?php
                $searchModel = new PrinterThemesSearch();
                $dataProvider=new ActiveDataProvider([
                        'query'=>PrinterThemes::find()->where(['printer_id'=>$model->id])->andWhere(['<>','status',10]),
                    ]);
                echo $this->render('shablonlar', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'printer_id' => $model->id,
                ]);
                ?>
            </div>
        </div>
    </div>
</div>
