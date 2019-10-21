<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MyRequisitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'My Requisites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-requisites-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create My Requisites', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'mfo',
            'qrcode',
            'oked',
            //'account_number',
            //'adress',
            //'landmark',
            //'phone',
            //'director',
            //'lang_id',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
