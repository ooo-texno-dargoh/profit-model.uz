<?php

namespace app\controllers;

use app\models\search\LangSearch;
use Yii;

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
        $searchModel = new LangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('sotuv-turlari', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
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
