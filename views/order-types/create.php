<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrderTypes */

$this->title = 'Create Order Types';
$this->params['breadcrumbs'][] = ['label' => 'Order Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
