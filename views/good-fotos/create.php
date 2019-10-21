<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GoodFotos */

$this->title = 'Create Good Fotos';
$this->params['breadcrumbs'][] = ['label' => 'Good Fotos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="good-fotos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
