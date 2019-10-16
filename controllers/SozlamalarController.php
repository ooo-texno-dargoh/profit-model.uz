<?php

namespace app\controllers;

use app\models\Lang;
use app\models\Printers;
use app\models\PrinterThemes;
use app\models\search\LangSearch;
use app\models\search\PrintersSearch;
use app\models\search\PrinterThemesSearch;
use Yii;
use yii\data\ActiveDataProvider;
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
        $searchModel = new PrintersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('printerlar', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
//    printers
    public function actionAddPrinters()
    {
        $model = new Printers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-printers','id'=>$model->id]);
        }

        return $this->render('add-printers', [
            'model' => $model,
        ]);
    }
    public function actionChangeStatusPrinter($id)
    {
        $model=Printers::findOne($id);
        if($model->status){
            $model->status=0;
        }
        else $model->status=1;
        $model->save();
        $this->redirect(['/sozlamalar/printerlar']);
    }
    public function actionViewPrinters($id)
    {
        $model=Printers::findOne($id);
        return $this->render('view-printers',
            [
                'model'=>$model,
            ]);
    }
    public function actionUpdatePrinters($id){
        $model = Printers::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-printers','id'=>$model->id]);
        }

        return $this->render('update-printers', [
            'model' => $model,
        ]);
    }
    public function actionDeletePrinters($id)
    {
        $model = Printers::findOne($id);

        $model->status=10;
        $model->save();
        $this->redirect(['/sozlamalar/printerlar']);
    }

    public function actionShablonlar($printer_id=null)
    {
        $searchModel = new PrinterThemesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        if($printer_id)
            $dataProvider=new ActiveDataProvider([
                'query'=>PrinterThemes::find()->where(['printer_id'=>$printer_id]),
                'pageSize'=>20
            ]);
        return $this->render('shablonlar', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionAddPrinterThemes()
    {
        $model = new PrinterThemes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-printer-themes','id'=>$model->id]);
        }

        return $this->render('add-printer-themes', [
            'model' => $model,
        ]);
    }


    public function actionSotuvTurlari()
    {
        return $this->render('sotuv-turlari');
    }
//lang
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
