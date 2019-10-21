<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kashes */

$this->title = 'Create Kashes';
$this->params['breadcrumbs'][] = ['label' => 'Kashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kashes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
