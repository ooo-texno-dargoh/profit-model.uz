<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\WherehousesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wherehouses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wherehouses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wherehouses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'good_id',
            'seriya',
            'count',
            'wherehouse_group_id',
            //'expiry_date',
            //'add_date',
            //'user_id',
            //'client_id',
            //'retail_price',
            //'base_price',
            //'wholesale_price',
            //'retail_dallor',
            //'base_dallor',
            //'wholesale_dallor',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
