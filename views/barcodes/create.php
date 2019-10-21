<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Barcodes */

$this->title = 'Create Barcodes';
$this->params['breadcrumbs'][] = ['label' => 'Barcodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barcodes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
