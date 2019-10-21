<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SoldGoods */

$this->title = 'Update Sold Goods: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sold Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sold-goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
