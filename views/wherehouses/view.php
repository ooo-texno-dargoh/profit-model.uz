<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wherehouses */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wherehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wherehouses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'good_id',
            'seriya',
            'count',
            'wherehouse_group_id',
            'expiry_date',
            'add_date',
            'user_id',
            'client_id',
            'retail_price',
            'base_price',
            'wholesale_price',
            'retail_dallor',
            'base_dallor',
            'wholesale_dallor',
            'status',
        ],
    ]) ?>

</div>
