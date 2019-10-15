<?php

namespace app\controllers;

class SozlamalarController extends \yii\web\Controller
{
    public function actionKorxonaHaqida()
    {
        return $this->render('korxona-haqida');
    }

    public function actionOlchovBirliklari()
    {
        return $this->render('olchov-birliklari');
    }

    public function actionPrinterlar()
    {
        return $this->render('printerlar');
    }

    public function actionShablonlar()
    {
        return $this->render('shablonlar');
    }

    public function actionSotuvTurlari()
    {
        return $this->render('sotuv-turlari');
    }

    public function actionTil()
    {
        return $this->render('til');
    }

    public function actionTolovTurlari()
    {
        return $this->render('tolov-turlari');
    }

    public function actionZavodFabrikalar()
    {
        return $this->render('zavod-fabrikalar');
    }

}
