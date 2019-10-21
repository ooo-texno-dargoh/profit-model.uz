<?php

namespace app\controllers;

use app\models\Factories;
use app\models\Lang;
use app\models\MyRequisites;
use app\models\PaymentTypes;
use app\models\PriceType;
use app\models\Printers;
use app\models\PrinterThemes;
use app\models\search\FactoriesSearch;
use app\models\search\LangSearch;
use app\models\search\OrderTypesSearch;
use app\models\search\PaymentTypesSearch;
use app\models\search\PriceTypeSearch;
use app\models\search\PrintersSearch;
use app\models\search\PrinterThemesSearch;
use app\models\search\UnitTypeSearch;
use app\models\UnitType;
use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;

class SozlamalarController extends \yii\web\Controller
{
    public function actionKorxonaHaqida()
    {
        $model=MyRequisites::findOne(1);
        return $this->render('korxona-haqida',
            [
                'model'=>$model,
            ]);
//        return $this->render('korxona-haqida');
    }
    public function actionUpdateKorxonaHaqida($id){
        $model=MyRequisites::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['/sozlamalar/korxona-haqida']);
        return $this->render('update-korxona-haqida',[
            'model'=>$model,
        ]);
    }

    public function actionOlchovBirliklari()
    {
        $searchModel = new UnitTypeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('olchov-birliklari', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAddUnitType()
    {
        $model = new UnitType();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/sozlamalar/olchov-birliklari']);
        }

        return $this->render('add-unit-type', [
            'model' => $model,
        ]);
    }
    public function actionUpdateUnitType($id)
    {
        $model = UnitType::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/sozlamalar/olchov-birliklari']);
        }

        return $this->render('update-unit-type', [
            'model' => $model,
        ]);
    }

    public function actionDeleteUnitType($id)
    {
        $model = UnitType::findOne($id);

        $model->status=10;
        $model->save();
        $this->redirect(['/sozlamalar/olchov-birliklari']);
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
        if($printer_id)
            $dataProvider=new ActiveDataProvider([
                'query'=>PrinterThemes::find()->where(['printer_id'=>$printer_id])->andWhere(['<>','status',10]),
            ]);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('shablonlar', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'printer_id'=>$printer_id,
        ]);
    }
    public function actionAddPrinterThemes($printer_id=null)
    {
        $model = new PrinterThemes();
        if($printer_id) $model->printer_id=$printer_id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-printer-themes','id'=>$model->id]);
        }

        return $this->render('add-printer-themes', [
            'model' => $model,
        ]);
    }

    public function actionChangeStatusPrinterTheme($id)
    {
        $model=PrinterThemes::findOne($id);
        if($model->status){
            $model->status=0;
        }
        else $model->status=1;
        $model->save();
        $this->redirect(['shablonlar']);
    }
    public function actionViewPrinterThemes($id)
    {
        $model=PrinterThemes::findOne($id);
        return $this->render('view-printer-themes',
            [
                'model'=>$model,
            ]);
    }

    public function actionUpdatePrinterThemes($id){
        $model = PrinterThemes::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-printer-themes','id'=>$model->id]);
        }

        return $this->render('update-printer-themes', [
            'model' => $model,
        ]);
    }
    public function actionDeletePrinterThemes($id)
    {
        $model = PrinterThemes::findOne($id);

        $model->status=10;
        $model->save();
        $this->redirect(['/sozlamalar/shablonlar']);
    }


    public function actionSotuvTurlari()
    {
        $searchModel = new PriceTypeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('sotuv-turlari', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAddPriceType()
    {
        $model = new PriceType();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/sozlamalar/sotuv-turlari']);
        }

        return $this->render('add-price-type', [
            'model' => $model,
        ]);
    }
    public function actionUpdatePriceType($id)
    {
        $model = PriceType::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/sozlamalar/sotuv-turlari']);
        }

        return $this->render('update-price-type', [
            'model' => $model,
        ]);
    }

    public function actionDeletePriceType($id)
    {
        $model = PriceType::findOne($id);

        $model->status=10;
        $model->save();
        $this->redirect(['/sozlamalar/sotuv-turlari']);
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
        $user=User::findOne(Yii::$app->user->identity->id);
        $user->lang_id=$id;
        $user->save();
        $this->redirect(['/sozlamalar/til','language'=>$user->lang->short]);
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
        $searchModel = new PaymentTypesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('tolov-turlari', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAddPaymentType()
    {
        $model = new PaymentTypes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/sozlamalar/tolov-turlari']);
        }

        return $this->render('add-payment-type', [
            'model' => $model,
        ]);
    }

    public function actionUpdatePaymentType($id)
    {
        $model = PaymentTypes::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/sozlamalar/tolov-turlari']);
        }

        return $this->render('update-payment-type', [
            'model' => $model,
        ]);
    }

    public function actionDeletePaymentType($id)
    {
        $model = PaymentTypes::findOne($id);

        $model->status=10;
        $model->save();
        $this->redirect(['/sozlamalar/tolov-turlari']);
    }
    public function actionZavodFabrikalar()
    {
        $searchModel = new FactoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination=['pageSize'=>20];
        return $this->render('zavod-fabrikalar', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
//        return $this->render('');
    }

    public function actionViewFactories($id)
    {
        $model=Factories::findOne($id);
        return $this->render('view-factories',
            [
                'model'=>$model,
            ]);
    }

    public function actionAddFactories()
    {
        $model = new Factories();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-factories','id'=>$model->id]);
        }

        return $this->render('add-factories', [
            'model' => $model,
        ]);
    }
    public function actionUpdateFactories($id)
    {
        $model = Factories::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-factories','id'=>$model->id]);
        }

        return $this->render('update-factories', [
            'model' => $model,
        ]);
    }

    public function actionDeleteFactories($id)
    {
        $model = Factories::findOne($id);

        $model->status=10;
        $model->save();
        $this->redirect(['/sozlamalar/zavod-fabrikalar']);
    }

}
