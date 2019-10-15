<?php

namespace app\controllers;

class KassaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionKassalar()
    {
        return $this->render('kassalar');
    }
    public function actionSotilganTovarlar()
    {
        return $this->render('sotilgan-tovarlar');
    }

}
