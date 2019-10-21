<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
        <div class="main-card card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <h5 class="card-title"><?=$model->name?></h5>
                    </div>
                    <div class="col-lg-4">
                            <?= Html::a('<i class="fa fa-edit"></i>', ['update-korxona-haqida', 'id' => $model->id], ['class' => 'btn btn-primary pull-right']) ?>
                    </div>
                </div>



                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'name',
                        'director',
                        'mfo',
                        'qrcode',
                        'oked',
                        'account_number',
                        'adress',
                        'landmark',
                        'phone',
                    ],
                ]) ?>

            </div>
        </div>
