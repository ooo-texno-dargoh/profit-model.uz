<?php

namespace app\controllers;

class QoshimchaController extends \yii\web\Controller
{
    public function actionBanklar()
    {
        return $this->render('banklar');
    }

    public function actionHududlar()
    {
        return $this->render('hududlar');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIshchiHodimlar()
    {
        return $this->render('ishchi-hodimlar');
    }

    public function actionLavozimlar()
    {
        return $this->render('lavozimlar');
    }

    public function actionOmborlar()
    {
        return $this->render('omborlar');
    }

}
