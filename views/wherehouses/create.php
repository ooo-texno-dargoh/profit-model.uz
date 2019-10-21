<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wherehouses */

$this->title = 'Create Wherehouses';
$this->params['breadcrumbs'][] = ['label' => 'Wherehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wherehouses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
