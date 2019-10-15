<?php

namespace app\controllers;

class MolYetkazuvchilarController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRoyxat()
    {
        return $this->render('royxat');
    }
    public function actionQarzdorlik()
    {
        return $this->render('qarzdorlik');
    }
    public function actionTurlari()
    {
        return $this->render('turlari');
    }
//

}
