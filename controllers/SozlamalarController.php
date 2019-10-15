<?php

namespace app\controllers;

use app\models\Lang;
use app\models\search\LangSearch;
use Yii;
use yii\data\Pagination;

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
        $searchModel = new LangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('til', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionChangeStatusLang($id)
    {
        $model=Lang::find()->where(['id'=>$id])->one();
        if($model->status){
            $model->status=0;
        }
        else $model->status=1;
        $model->save();
        $this->redirect(['/sozlamalar/til']);
    }
    public function actionAddTil()
    {
        $model = new Lang();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['til']);
        }

        return $this->render('add-til', [
            'model' => $model,
        ]);
    }
    public function actionUpdateTil($id)
    {
        $model = Lang::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['til']);
        }

        return $this->render('update-til', [
            'model' => $model,
        ]);
    }
    public function actionDeleteTil($id)
    {
        $model = Lang::findOne($id);

        $model->status=10;
        $model->save();
        $this->redirect(['/sozlamalar/til']);
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
