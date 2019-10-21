<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\GoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Goods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'shortname',
            'body',
            'photo1',
            //'photo2',
            //'photo3',
            //'weight',
            //'unit_type_id',
            //'count_in_case',
            //'category_id',
            //'brend_id',
            //'factory_id',
            //'min_count',
            //'status',
            //'data_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
