<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UnitTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unit Types';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h5 class="card-title">Tillar</h5>
    <div class="main-card card">
        <div class="card-body">
            <a href="<?=Yii::$app->urlManager->createUrl(['/sozlamalar/create'])?>" class="pull-right btn btn-success"><i class="fa fa-plus-square"></i></a>

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


        </div>
    </div>

