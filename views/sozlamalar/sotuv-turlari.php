<?php
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\LangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Sotuv turlari</h5>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'tableOptions' => ['class' => 'mb-0 table table-hover'],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

//        'id',
                        'name',
                        'short',
//        'class',
//        'icon',
                        'status',


                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => 'Amallar',
                            'template' => '{view}{update}{delete}',
                            'buttons' => [
                                'update' => function ($url, $model) {
                                    return Html::a(Yii::t('app', '<span class="fa fa-edit"></span>'), ['update', 'id' => $model->id], [
                                            'class' => 'btn btn-primary',
                                        ]);
                                },
                                'delete' => function ($url, $model) {
                                    return Html::a(Yii::t('app', '<span class="fa fa-trash"></span>  '), ['delete', 'id' => $model->id], [
                                        'class' => 'btn btn-danger',
                                        'data' => [
                                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
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
    </div>
</div>