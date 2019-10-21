<?php
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView; ?>
<h5 class="card-title">Zavod fabrikalar</h5>
<div class="main-card card">
    <div class="card-body">

        <a href="<?=Yii::$app->urlManager->createUrl(['/sozlamalar/add-factories'])?>" class="pull-right btn btn-success"><i class="fa fa-plus-square"></i></a>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'tableOptions' => ['class' => 'mb-0 table table-hover'],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
//                'id',
                'name',

//                'host',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view}{update}{delete}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a(Yii::t('app', '<span class="fa fa-eye"></span>'), ['/sozlamalar/view-factories', 'id' => $model->id], [
                                'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-info',
                            ]);
                        },
                        'update' => function ($url, $model) {
                            return Html::a(Yii::t('app', '<span class="fa fa-edit"></span>'), ['/sozlamalar/update-factories', 'id' => $model->id], [
                                'class' => 'mb-2 mr-2 border-0 btn-transition btn btn-outline-info',
                            ]);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a(Yii::t('app', '<span class="fa fa-trash"></span>  '), ['/sozlamalar/delete-factories', 'id' => $model->id], [
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
