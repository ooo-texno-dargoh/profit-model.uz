<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SoldGoods */

$this->title = 'Create Sold Goods';
$this->params['breadcrumbs'][] = ['label' => 'Sold Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sold-goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
