<?php

namespace app\controllers;

class BuxgalteriyaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDebitKredit()
    {
        return $this->render('debit-kredit');
    }
    public function actionDalolatnomalar()
    {
        return $this->render('dalolatnomalar');
    }
    public function actionTovarAylanmasi()
    {
        return $this->render('tovar-aylanmasi');
    }
    public function actionTovarlarHarakati()
    {
        return $this->render('tovarlar-harakati');
    }
    public function actionNakladnoylar()
    {
        return $this->render('nakladnoylar');
    }

}
