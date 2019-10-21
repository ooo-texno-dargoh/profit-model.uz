<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WherehouseGroups */

$this->title = 'Create Wherehouse Groups';
$this->params['breadcrumbs'][] = ['label' => 'Wherehouse Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wherehouse-groups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
