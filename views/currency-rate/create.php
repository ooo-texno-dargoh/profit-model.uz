<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CurrencyRate */

$this->title = 'Create Currency Rate';
$this->params['breadcrumbs'][] = ['label' => 'Currency Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="currency-rate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
