<?php
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView; ?>
<h5 class="card-title">Shablonlar</h5>
<div class="main-card card">
    <div class="card-body">
        <a href="<?=Yii::$app->urlManager->createUrl(['/sozlamalar/add-printer-themes','printer_id'=>$printer_id])?>" class="pull-right btn btn-success"><i class="fa fa-plus-square"></i></a>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'tableOptions' => ['class' => 'mb-0 table table-hover'],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'theme',
                [
                    'attribute'=>'printer_id',
                    'value'=>function($x){return $x->printer->name;},
                    'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Printers::find()->where(['status'=>1])->all(),'id','name')
                ],
                [
                    'attribute'=>'status',
                    'filter'=>['1'=>'Faol','0'=>'Faol emas'],
                    'value'=>function($x){
                        if($x->status)
                            return Html::a(Yii::t('app', '<span class="fa fa-check"></span>  '), ['change-status-printer-theme','id'=>$x->id], [
                                'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-success',
                                'data' => [
                                    'confirm' => Yii::t('app', 'Tasdiqlaysizmi?'),
                                ],
                            ]);
                        return Html::a(Yii::t('app', '<span class="fa fa-exclamation"></span>  '), ['change-status-printer-theme','id'=>$x->id], [
                            'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-danger',
                            'data' => [
                                'confirm' => Yii::t('app', 'Tasdiqlaysizmi?'),
                            ],
                        ]);
                    },
                    'format'=>'raw',
                    'headerOptions'=>['style'=>'width:1%']
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view}{update}{delete}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a(Yii::t('app', '<span class="fa fa-eye"></span>'), ['view-printer-themes', 'id' => $model->id], [
                                'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-info',
                            ]);
                        },
                        'update' => function ($url, $model) {
                            return Html::a(Yii::t('app', '<span class="fa fa-edit"></span>'), ['update-printer-themes', 'id' => $model->id], [
                                'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-info',
                            ]);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a(Yii::t('app', '<span class="fa fa-trash"></span>  '), ['delete-printer-themes', 'id' => $model->id], [
                                'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-danger',
                                'data' => [
                                    'confirm' => Yii::t('app', 'Haqiqatan ham ushbu ma\'lumotni o\'chirmoqchimisiz?'),
                                    'method' => 'post',
                                ],
                            ]);
                        }

                    ],
                ],
            ],
        ]); ?>

    </div>
</div>
