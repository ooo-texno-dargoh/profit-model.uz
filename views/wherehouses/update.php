<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wherehouses */

$this->title = 'Update Wherehouses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wherehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wherehouses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
