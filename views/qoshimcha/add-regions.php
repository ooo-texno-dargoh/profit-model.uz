<?php

?>
<div class="main-card card">
    <div class="card-body">
        <h5 class="card-title">Printer qo'shish</h5>

        <?= $this->render('form-region', [
            'model' => $model,
            'name_def'=>$name_def,
            'name1'=>$name1,
            'name2'=>$name2,
            'name3'=>$name3
        ]) ?>
    </div>
</div>